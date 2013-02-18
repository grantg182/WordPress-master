(function (window, undefined) {

    var def = {
        "appNameSpace": "funmoodsmpvNS",
        "entryPointId": "funmoodsmpvep",
        "srf": "funmoods_mm.srf",
        "prdct": "funmoodsmpv",
        "loader": "montieraToolbarLoader",
        "sslDomain": "https://ssl-mpv.montiera.com",
        "cnfgDomain": "http://cnfg.wizebar.com/cnfg",
        "widgetsDomain": "http://widgets.wizebar.com/widgets",
        "reportsDomain": "http://reports.wizebar.com/reports",
        "weightsURL": "http://weights.wizebar.com/weights/tools.asmx/GetWeights",
        "disableAppURL" : "http://boot.wizebar.com/boot/tools.asmx",
        "version": "1.4.1",
        "mapfile": "funmoodsBaseMap1.js",
        "maxPageLogics": Infinity,
        "cookiesDetectionDomains": [

            "widgets.wizebar.com"


        ],
        "r": 82

    },


 entryPoint = {

     "loadScript": function (url, id) {
         try {

             var prefix = url.indexOf("?") > -1 ? "&" : "?";
             url += def.r !== "undefined" ? (prefix + "random=" + def.r) : "";
             url += "&namespace=" + def.appNameSpace;
             var scrpt = document.createElement("script");
             scrpt.setAttribute("type", "text/javascript");
             scrpt.setAttribute("src", url);
             scrpt.setAttribute("id", id);
             document.getElementsByTagName("head")[0].appendChild(scrpt);


         }

         catch (e) {

             try {
                 mmErrorReporter.sendErrorReport({


                     "err_desc": e,
                     "err_location": "entryPoint.loadScript()",
                     "extra": "softonic.js"

                 });
             }

             catch (e) {

             }

         }


     },

        "boot": function () {
            try {
                var url, myParams, myElement;
                if (typeof window[def.appNameSpace] === "undefined") {

                    window[def.appNameSpace] = {};
                    window[def.appNameSpace].def = def;
                    myElement = document.getElementById(def.entryPointId);
                    myParams = myElement && myElement.getAttribute("src");
                    myParams = myParams && /[?].+/.exec(myParams)[0];
                    this.checkSecure(myParams);
                    def.loader = /[?&]loader=/.test(myParams) ? /[?&]loader=([^?&]+)/.exec(myParams)[1] : def.loader;
                    url = def.widgetsDomain + "/" + def.version + "/loaders/" + def.loader + ".js?v=2";
                    this.loadScript(url, "mpvBootScript");

                }



         }

         catch (e) {

             try {

                 try {
                     mmErrorReporter.sendErrorReport({


                         "err_desc": e,
                         "err_location": "entryPoint.boot()",
                         "extra": "softonic.js"

                     });
                 }

                 catch (e) {

                 }
             }

             catch (e) {

             }
         }

        },

      

        "checkSecure": function (scriptParams) {

         try {

             if (/ssl=true/.test(scriptParams)) {

                 def.cnfgDomain = def.cnfgDomain.replace(/http:\/\/[^\/]+/i, def.sslDomain);
                 def.widgetsDomain = def.widgetsDomain.replace(/http:\/\/[^\/]+/i, def.sslDomain);
                 def.reportsDomain = def.reportsDomain.replace(/http:\/\/[^\/]+/i, def.sslDomain);
                 def.weightsURL = def.weightsURL.replace(/http:\/\/[^\/]+/i, def.sslDomain);
             }

         }

         catch (e) {


         }


     }

 };

    entryPoint.boot();


} (window));