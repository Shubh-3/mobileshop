
<?php 
  session_start();
  if (!isset($_SESSION['vu'])) {
    header("Location: account/login.php");
  } 
?>
<!doctype html>
<html lang="en" class="color_scheme" >
	
<!-- Mirrored from theme905-computer-shop.myshopify.com/pages/wishlist by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 06:21:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">

		

		<title>
			Wishlist

			
				&ndash; Mobilex
			
		</title>

		<link rel="canonical" href="wishlist.html"><link rel="shortcut icon" href="../../cdn.shopify.com/s/files/1/0453/5035/5103/files/fav_32x325d4d.png?v=1597063669" type="image/png"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<!--[if IE]>
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
		
		<!-- CSS -->
		








<style type="text/css">
	@font-face {
  font-family: Prompt;
  font-weight: 400;
  font-style: normal;
  src: url("https://fonts.shopifycdn.com/prompt/prompt_n4.a0d8d0b044775ceddc106ae236fbbcc8363bb3fa.woff2?&amp;hmac=3bc91b88c7a2621b5d28da40b480242edcf69f9caf098ec14d1477c354c59eb3") format("woff2"),
       url("https://fonts.shopifycdn.com/prompt/prompt_n4.04bfdea35272b1aad8e8feb1972fcfcc2f225452.woff?&amp;hmac=e76aaa8502e76da6e61c4210a8122b91d23cd4e8cc272e94b43cb0f128dcc3f6") format("woff");
}

	@font-face {
  font-family: Prompt;
  font-weight: 400;
  font-style: normal;
  src: url("https://fonts.shopifycdn.com/prompt/prompt_n4.a0d8d0b044775ceddc106ae236fbbcc8363bb3fa.woff2?&amp;hmac=3bc91b88c7a2621b5d28da40b480242edcf69f9caf098ec14d1477c354c59eb3") format("woff2"),
       url("https://fonts.shopifycdn.com/prompt/prompt_n4.04bfdea35272b1aad8e8feb1972fcfcc2f225452.woff?&amp;hmac=e76aaa8502e76da6e61c4210a8122b91d23cd4e8cc272e94b43cb0f128dcc3f6") format("woff");
}

	@font-face {
  font-family: Prompt;
  font-weight: 300;
  font-style: normal;
  src: url("https://fonts.shopifycdn.com/prompt/prompt_n3.77f7f1b5f26067fb853edef7737215a120866853.woff2?&amp;hmac=ebaab03a8eafeab09706e179b3e175b05d9a3e0b4cdee1d4af3c0fb5d4a1416b") format("woff2"),
       url("https://fonts.shopifycdn.com/prompt/prompt_n3.a65bb57eb9d692056c4143121c241efd674e07e5.woff?&amp;hmac=2565a2a8663afcb32dc2a9ed732b31bb2ad4e7a84a6d4f0a50160fb4c843dcaf") format("woff");
}

	@font-face {
  font-family: Prompt;
  font-weight: 400;
  font-style: normal;
  src: url("https://fonts.shopifycdn.com/prompt/prompt_n4.a0d8d0b044775ceddc106ae236fbbcc8363bb3fa.woff2?&amp;hmac=3bc91b88c7a2621b5d28da40b480242edcf69f9caf098ec14d1477c354c59eb3") format("woff2"),
       url("https://fonts.shopifycdn.com/prompt/prompt_n4.04bfdea35272b1aad8e8feb1972fcfcc2f225452.woff?&amp;hmac=e76aaa8502e76da6e61c4210a8122b91d23cd4e8cc272e94b43cb0f128dcc3f6") format("woff");
}

	@font-face {
  font-family: Prompt;
  font-weight: 500;
  font-style: normal;
  src: url("https://fonts.shopifycdn.com/prompt/prompt_n5.da856f061682afafa2a0db42568134b64b5e9d9e.woff2?&amp;hmac=741a0fa201d27a08ed2773d7c57df0610ff6c1a76f98ccb0d565b99462eb981e") format("woff2"),
       url("https://fonts.shopifycdn.com/prompt/prompt_n5.cbf02029845bae6c109eef7b72425de666c9db64.woff?&amp;hmac=05fe033acfada2c89ba6ea5c5205403f10a8fb6da650de69499ed7f51fbdbf64") format("woff");
}

	@font-face {
  font-family: Prompt;
  font-weight: 700;
  font-style: normal;
  src: url("https://fonts.shopifycdn.com/prompt/prompt_n7.fc3862c8bbb0ff06bba7f3afbfb5dad83225f43a.woff2?&amp;hmac=c6fabc49a5c0e8ea7647ce14726ecb9685993941b5f0e2d99aabfe1d8920449f") format("woff2"),
       url("https://fonts.shopifycdn.com/prompt/prompt_n7.304b305bf2a1b290fe1989af758e5a084561e689.woff?&amp;hmac=d0ec6a9fd01d59986e219a196b7815fa16a0d17b27948e3f8093870749bd5559") format("woff");
}

	@font-face {
  font-family: Prompt;
  font-weight: 600;
  font-style: normal;
  src: url("https://fonts.shopifycdn.com/prompt/prompt_n6.415538348eab10f2d56ee5092538f5d1a23af789.woff2?&amp;hmac=358d9a6186aa83d2cf99874e3aa295a0b4f35d9cbd5c9cb47fa5d53e0b6f3809") format("woff2"),
       url("https://fonts.shopifycdn.com/prompt/prompt_n6.1d84631fa0af83e52231205a9c8a3bfad01e5a30.woff?&amp;hmac=ce98bf46468120c461faf3819935aac59b2ce091c2bd77f25efa79b8f53d121c") format("woff");
}

	@font-face {
  font-family: Prompt;
  font-weight: 800;
  font-style: normal;
  src: url("https://fonts.shopifycdn.com/prompt/prompt_n8.5ef8281b8f2d1f71e7384989b17f25a44781f6b2.woff2?&amp;hmac=2dc313954987781947932824b89ca7476c5975537cc12ee5ae9d2991dab6f998") format("woff2"),
       url("https://fonts.shopifycdn.com/prompt/prompt_n8.3505d993b1b5d124e82f68ecd9419903feb369e4.woff?&amp;hmac=8b0db74c8c9048d2247cbf466d1c0becf6d29692f98481c6d223122167edd09e") format("woff");
}

	
	:root {
		/*  TYPOGRAPHY  */
		--base-font: Prompt, sans-serif;
		--base-font-size: 16px;
		--heading-font: Prompt, sans-serif;
		--heading-font-size: 30px;
		--heading-light-font-weight: 300;
		--heading-regular-font-weight: 400;
		--heading-medium-font-weight: 500;
		--heading-bold-font-weight: 700;
		--heading-semi-bold-font-weight: 600;
		--heading-extra-bold-font-weight: 800;
		/*  COLORS  */
		--color-1: #3c3c5b;
		--color-2: #485ad7;
		--color-3: #ffffff;
		--color-4: #000000;
		--bg-color: #ffffff;
		--base-font-color: #6c6d73;
		--heading-font-color: #1a1c28;
		--border-color: #f2f4ff;
		--links-color: #a7a8a9;
		--links-color-hover: #485ad7;
		--button-color: #485ad7;
		--button-text-color: #ffffff;
		--button-border-color: #485ad7;
		--button-hover-color: #1a1c28;
		--button-hover-text-color: #ffffff;
		--button-hover-border-color: #1a1c28;
		--alt-button-color: #ffffff;
		--alt-button-text-color: #1a1c28;
		--alt-button-border-color: #ffffff;
		--alt-button-hover-color: #1a1c28;
		--alt-button-hover-text-color: #ffffff;
		--alt-button-hover-border-color: #1a1c28;
		--product-name-color: #3c3c5b;
		--product-name-color-hover: #485ad7;
		--product-price-color: #485ad7;
		--product-price-sale-color: #a7a8a9;
	}
</style>
		<link href="../../cdn.shopify.com/s/files/1/0453/5035/5103/t/2/assets/style.scss3ebf.css?v=11478251622438004466" rel="stylesheet" type="text/css" media="all" />
		<link href="../../cdn.shopify.com/s/files/1/0453/5035/5103/t/2/assets/responsive.scssc209.css?v=9791142188642938397" rel="stylesheet" type="text/css" media="all" />
		
		
		<!-- JS -->
		<script>
			var theme = {
				moneyFormat: "${{amount}}",
			};
		</script>
		<script src="../../cdn.shopify.com/s/files/1/0453/5035/5103/t/2/assets/assetsbab3.js?v=10551044667500054458"></script>
		<script src="../../cdn.shopify.com/s/files/1/0453/5035/5103/t/2/assets/lazysizes.min58a1.js?v=3589057794279519870" defer></script>
		<script src="../../cdn.shopify.com/s/files/1/0453/5035/5103/t/2/assets/shop4b32.js?v=8502645839657745202" defer></script><script src="../../cdn.shopify.com/s/files/1/0453/5035/5103/t/2/assets/header-script8c3a.js?v=11801842345290007965" type="text/javascript"></script>
<!-- SHOPIFY SERVICE SCRIPTS -->
		<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/45350355103/digital_wallets/dialog">
<link href="https://monorail-edge.shopifysvc.com/" rel="dns-prefetch">
<script id="shopify-features" type="application/json">{"accessToken":"653e794f160175805422860e6e676f2a","betas":["rich-media-storefront-analytics"],"domain":"theme905-computer-shop.myshopify.com","predictiveSearch":true,"shopId":45350355103,"smart_payment_buttons_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en"}</script>
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 45350355103,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "page"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "theme905-computer-shop.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"USD","rate":"1.0"};
Shopify.country = "US";
Shopify.theme = {"name":"Them905","id":107858165919,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "cdn.shopify.com";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=theme905-computer-shop.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id="__st">var __st={"a":45350355103,"offset":-14400,"reqid":"b9a9bc4f-b69c-4bec-b806-57f82b41f3bf","pageurl":"theme905-computer-shop.myshopify.com\/pages\/wishlist","s":"pages-64589168799","u":"0352bfe478c4","p":"page","rtyp":"page","rid":64589168799};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {"page":{"pageType":"page","resourceType":"page","resourceId":64589168799},"page_view_event_id":"26aeb20f53b88b06dc0431947c1c19cdcd500e3063adb3f61868830430200a08","cart_event_id":"0abc6604927930c8e78a8ce28073a313cf0c3ad11fb06f8737a144a40ac745e1"};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var hasLoggedConversion = function(token) {
    if (token) {
      return document.cookie.indexOf('loggedConversion=' + token) !== -1;
    }
    return false;
  }

  var setCookieIfConversion = function(token) {
    if (token) {
      var twoMonthsFromNow = new Date(Date.now());
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var first = document.getElementsByTagName('script')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      var scriptFallback = document.createElement('script');
      scriptFallback.type = 'text/javascript';
      scriptFallback.onerror = function(error) {
              var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });
    
          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful
    
        } // XHR beacon   
    
        var xhr = new XMLHttpRequest();
    
        try {
          xhr.open('POST.html', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }
    
        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 45350355103,
      theme_id: 107858165919,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "https://cdn.shopify.com/s/trekkie.storefront.448cdc40601300a20b0345d9ec29be191911a7d4.min.js"});

      };
      scriptFallback.async = true;
      scriptFallback.src = '../../cdn.shopify.com/s/trekkie.storefront.448cdc40601300a20b0345d9ec29be191911a7d4.min.js';
      first.parentNode.insertBefore(scriptFallback, first);
    };
    script.async = true;
    script.src = '../../cdn.shopify.com/s/trekkie.storefront.448cdc40601300a20b0345d9ec29be191911a7d4.min.js';
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":45350355103,"isMerchantRequest":null,"themeId":107858165919,"themeCityHash":"5235111964880936092","contentLanguage":"en","currency":"USD"},"isServerSideCookieWritingEnabled":true,"isPixelGateEnabled":true},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":1},"Session Attribution":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;
      (function () {
        if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
          return;
        }
        window.BOOMR = window.BOOMR || {};
        window.BOOMR.snippetStart = new Date().getTime();
        window.BOOMR.snippetExecuted = true;
        window.BOOMR.snippetVersion = 12;
        window.BOOMR.application = "storefront-renderer";
        window.BOOMR.themeName = "Apparelix";
        window.BOOMR.themeVersion = "1.0.0";
        window.BOOMR.shopId = 45350355103;
        window.BOOMR.themeId = 107858165919;
        window.BOOMR.url =
          "../../cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
        var where = document.currentScript || document.getElementsByTagName("script")[0];
        var parentNode = where.parentNode;
        var promoted = false;
        var LOADER_TIMEOUT = 3000;
        function promote() {
          if (promoted) {
            return;
          }
          var script = document.createElement("script");
          script.id = "boomr-scr-as";
          script.src = window.BOOMR.url;
          script.async = true;
          parentNode.appendChild(script);
          promoted = true;
        }
        function iframeLoader(wasFallback) {
          promoted = true;
          var dom, bootstrap, iframe, iframeStyle;
          var doc = document;
          var win = window;
          window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
          bootstrap = function(parent, scriptId) {
            var script = doc.createElement("script");
            script.id = scriptId || "boomr-if-as";
            script.src = window.BOOMR.url;
            BOOMR_lstart = new Date().getTime();
            parent = parent || doc.body;
            parent.appendChild(script);
          };
          if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
            window.BOOMR.snippetMethod = "s";
            bootstrap(parentNode, "boomr-async");
            return;
          }
          iframe = document.createElement("IFRAME");
          iframe.src = "about:blank";
          iframe.title = "";
          iframe.role = "presentation";
          iframe.loading = "eager";
          iframeStyle = (iframe.frameElement || iframe).style;
          iframeStyle.width = 0;
          iframeStyle.height = 0;
          iframeStyle.border = 0;
          iframeStyle.display = "none";
          parentNode.appendChild(iframe);
          try {
            win = iframe.contentWindow;
            doc = win.document.open();
          } catch (e) {
            dom = document.domain;
            iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
            win = iframe.contentWindow;
            doc = win.document.open();
          }
          if (dom) {
            doc._boomrl = function() {
              this.domain = dom;
              bootstrap();
            };
            doc.write("<body onload='document._boomrl();'>");
          } else {
            win._boomrl = function() {
              bootstrap();
            };
            if (win.addEventListener) {
              win.addEventListener("load", win._boomrl, false);
            } else if (win.attachEvent) {
              win.attachEvent("onload", win._boomrl);
            }
          }
          doc.close();
        }
        var link = document.createElement("link");
        if (link.relList &&
          typeof link.relList.supports === "function" &&
          link.relList.supports("preload") &&
          ("as" in link)) {
          window.BOOMR.snippetMethod = "p";
          link.href = window.BOOMR.url;
          link.rel = "preload";
          link.as = "script";
          link.addEventListener("load", promote);
          link.addEventListener("error", function() {
            iframeLoader(true);
          });
          setTimeout(function() {
            if (!promoted) {
              iframeLoader(true);
            }
          }, LOADER_TIMEOUT);
          BOOMR_lstart = new Date().getTime();
          parentNode.appendChild(link);
        } else {
          iframeLoader(false);
        }
        function boomerangSaveLoadTime(e) {
          window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
        }
        if (window.addEventListener) {
          window.addEventListener("load", boomerangSaveLoadTime, false);
        } else if (window.attachEvent) {
          window.attachEvent("onload", boomerangSaveLoadTime);
        }
        if (document.addEventListener) {
          document.addEventListener("onBoomerangLoaded", function(e) {
            e.detail.BOOMR.init({
              producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
              ResourceTiming: {
                enabled: true,
                trackedResourceTypes: ["script", "img", "css"]
              },
            });
            e.detail.BOOMR.t_end = new Date().getTime();
          });
        } else if (document.attachEvent) {
          document.attachEvent("onpropertychange", function(e) {
            if (!e) e=event;
            if (e.propertyName === "onBoomerangLoaded") {
              e.detail.BOOMR.init({
                producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
                ResourceTiming: {
                  enabled: true,
                  trackedResourceTypes: ["script", "img", "css"]
                },
              });
              e.detail.BOOMR.t_end = new Date().getTime();
            }
          });
        }
      })();
    

    
        window.ShopifyAnalytics.lib.page(
          null,
          {"pageType":"page","resourceType":"page","resourceId":64589168799},
          "26aeb20f53b88b06dc0431947c1c19cdcd500e3063adb3f61868830430200a08"
        );
      

    var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
    var token = match? match[1]: undefined;
    if (!hasLoggedConversion(token)) {
      setCookieIfConversion(token);
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "../../cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-714e2e017903fad17d4471cb27d1f2c8a83b5a7a276f92420f7e5e40dbc9136e.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script>
<script>!function(e){e.addEventListener("DOMContentLoaded",function(){var t=['form[action^="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]'].join(",");null!==e.querySelector(t)&&(window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"},(t=e.createElement("script")).setAttribute("src","../../cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.1/index.js"),e.body.appendChild(t))})}(document);</script>
<script integrity="sha256-2KbxRG1nAJxSTtTmhkiAC6kILrdVSO4o4QUDMcvnuig=" data-source-attribution="shopify.loadfeatures" defer="defer" src="../../cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-d8a6f1446d67009c524ed4e68648800ba9082eb75548ee28e1050331cbe7ba28.js" crossorigin="anonymous"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="../../cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
<script id="sections-script" data-sections="template-wishlist,index-image-with-text-overlay,index-products-carousel,index-testimonials,header-1" defer="defer" src="../../cdn.shopify.com/s/files/1/0453/5035/5103/t/2/compiled_assets/scriptse004.js?1269"></script>

<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>
	<meta property="og:image" content="https://cdn.shopify.com/s/files/1/0453/5035/5103/files/logo.png?height=628&pad_color=ffffff&v=1597063927&width=1200" />
<meta property="og:image:secure_url" content="https://cdn.shopify.com/s/files/1/0453/5035/5103/files/logo.png?height=628&pad_color=ffffff&v=1597063927&width=1200" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
</head>

	<body class="template-page scheme_1 ">
		<div class="page_wrapper">

			<div id="page_preloader__bg">
				<img id="page_preloader__img" src="../../cdn.shopify.com/s/files/1/0453/5035/5103/t/2/assets/shopify_logo2690.gif?v=1159741517696068937" alt="">
			</div>

			<script>
				preloaderBg = document.getElementById('page_preloader__bg');
				preloaderImg = document.getElementById('page_preloader__img');

				window.addEventListener('load', function() {
					preloaderBg.classList.add("off");
					preloaderImg.classList.add("off");
				});

			</script>

			
				<div id="shopify-section-helper" class="shopify-section"></div>
				
				
						<div id="shopify-section-header-1" class="shopify-section"><div id="pseudo_sticky_block"></div>




<header id="page_header" class="header_layout_1 ">
	<div class="page_container">
		<div class="header_row_1"> 
				<div class="header_item_left">
					
						


<div class="currency_selector">
	<div class="currency_selector__wrap" title="Currency">
		<div id="currency_active">USD</div>

		<ul id="currency_selector">
			<li data-value="USD" id="currency_selected" class="currency_selector__item">USD</li>

			
				
			
				
					<li data-value="EUR" class="currency_selector__item">EUR</li>
				
			
				
					<li data-value="GBP" class="currency_selector__item">GBP</li>
				
			
		</ul>
	</div>
</div>
					

					<script>
						theme.shopCurrency = "USD";
						theme.moneyFormat = "${{amount}}";
						theme.moneyFormatCurrency = "${{amount}} USD";
					</script>

					<script src="../../cdn.shopify.com/s/javascripts/currencies.js"></script>
					<script src="../../cdn.shopify.com/s/files/1/0453/5035/5103/t/2/assets/currency-toolsb419.js?v=5605314120525099720"></script>
				</div>

				<div class="header_item_center">
					
					
					
					
					

					
		
			<a class="header_logo" href="../index.html">
				<img src="../../cdn.shopify.com/s/files/1/0453/5035/5103/files/logo_130x30_crop_center%402xc3bf.png?v=1597063927" alt="Mobilex" style="max-width: 130px">
				
			</a>
		


				</div>
				
				<div class="header_item_right">
					
					
						
						<div class="header_search">
	<span class="search_toggle">
				    
			<span class="link_text">Search</span>
		
		<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
			<path d="M20 18.5787L16.2437 14.8223C17.4619 13.2995 18.2741 11.269 18.2741 9.13706C18.2741 4.06091 14.2132 0 9.13706 0C4.06091 0 0 4.06091 0 9.13706C0 14.2132 4.06091 18.2741 9.13706 18.2741C11.269 18.2741 13.2995 17.5635 14.8223 16.2437L18.5787 20L20 18.5787ZM2.03046 9.13706C2.03046 5.17766 5.17766 2.03046 9.13706 2.03046C13.0964 2.03046 16.2437 5.17766 16.2437 9.13706C16.2437 13.0964 13.0964 16.2437 9.13706 16.2437C5.17766 16.2437 2.03046 13.0964 2.03046 9.13706Z"/>
		</svg>
		
	</span>
	<div class="search_form_wrap">
		<form action="https://theme905-computer-shop.myshopify.com/search" method="get" role="search" class="search_form">
			<span class="header_serch_caption">Looking for something special?</span>
			<input type="search" name="q" placeholder="Search" aria-label="Search">
			<label for="header_search_submit">
				<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path d="M20 18.5787L16.2437 14.8223C17.4619 13.2995 18.2741 11.269 18.2741 9.13706C18.2741 4.06091 14.2132 0 9.13706 0C4.06091 0 0 4.06091 0 9.13706C0 14.2132 4.06091 18.2741 9.13706 18.2741C11.269 18.2741 13.2995 17.5635 14.8223 16.2437L18.5787 20L20 18.5787ZM2.03046 9.13706C2.03046 5.17766 5.17766 2.03046 9.13706 2.03046C13.0964 2.03046 16.2437 5.17766 16.2437 9.13706C16.2437 13.0964 13.0964 16.2437 9.13706 16.2437C5.17766 16.2437 2.03046 13.0964 2.03046 9.13706Z"/>
				</svg>
			</label>
			<input type="submit" id="header_search_submit">
			<span class="search_form_close">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M13.7156 5L15 6.14286L10.993 10L15 13.8571L13.7156 15L9.95417 11.2857L6.28442 15L5 13.8571L8.9342 10L5 6.14286L6.28442 5L9.95417 8.71429L13.7156 5Z" fill="#E4E4E4"/>
				</svg>
			</span>
		</form>

		
			<script>
				theme.searchAjaxOn = true;
			</script>

			<div id="search_result_container"></div>
		

		<div class="search_form_cover"></div>
	</div>
</div>
					

					
						
						<div class="header_wishlist">
							<a href="wishlist.html" title="Wishlist">
								<span class="link_text">Wishlist</span>
								
								<span class="zemez_wishlist_total  hidden"></span>
							</a>
						</div>
					
					
					
						<div class="header_account">

							
								<a href="../account/login.php">
									<span class="link_text">Account</span>
									
								</a>
							
						</div>
					
					
					
<div class="header_cart" id="main__cart_item">
	<a class="cart_link" href="../cart.html">
	
		<span class="link_text">Cart</span>	
	
	<span id="cart_items" class="header_cart_items hidden"> 0 </span>
	<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
	<path d="M20 20H0V6H20V20ZM2 18H18V8H2V18Z"/>
	<path d="M14 3.99995H12C12 3.49995 11.8 2.99995 11.4 2.59995C10.7 1.89995 9.3 1.89995 8.6 2.59995C8.2 2.89995 8 3.39995 8 3.99995H6C6 2.89995 6.4 1.89995 7.2 1.19995C8.7 -0.300049 11.3 -0.300049 12.9 1.19995C13.6 1.89995 14 2.89995 14 3.99995Z"/></a>
	</svg>

	
		<script>
			theme.cartAjaxOn = true;
			theme.cartAjaxTextEmpty = 'It appears that your cart is currently empty';
			theme.cartAjaxTextTotalPrice = 'Total price';
			theme.cartAjaxTextGoCart = 'Go to cart';
			theme.cartAjaxTextClearCart = 'Clear cart';
		</script>
		<div class="cart_content_wrap">
			<div class="cart_content_preloader off">
				<div class="global_loader"></div>
			</div>
			<div id="cart_content_box">
				
					<p class="alert alert-warning">It appears that your cart is currently empty</p>

				
			</div>
		</div>
	
</div>


					

				</div>
			
		</div>

		<div class="header_row_2">   
			<div class="container header_main_wrap">

				<div class="header_wrap2 header_center">

					
					
						<nav id="megamenu" class="megamenu">
							<h2 id="megamenu_mobile_toggle" style="display: none;" title="Menu">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect y="3" width="20" height="2"/>
									<rect y="9" width="20" height="2"/>
									<rect y="15" width="20" height="2"/>
								</svg>
							</h2>

							<div id="megamenu_mobile_close" style="display: none;">
								<div class="close_icon"></div>
							</div>

							<ul id="megamenu_level__1" class="level_1">
								
									
									
									

									<li class="level_1__item level_2__small" style="display: inline-block;">
										<a class="level_1__link " href="../index.html">Home
											<i class="level_1__trigger megamenu_trigger" data-submenu="menu_1565951062484"></i>
											
										</a>

										
												
													<ul class="level_2" id="menu_1565951062484" style="display: none;">
														<li class="item_link-linklist">
															<div><ul class="level_3">
																	


																		<li class="level_3__item ">
																			<a class="level_3__link" href="../index.html">Home</a>

																			
																		</li>
																	


																		<li class="level_3__item ">
																			<a class="level_3__link" href="../collections/all.html">Catalog</a>

																			
																		</li>
																	


																		<li class="level_3__item with_ul">
																			<a class="level_3__link" href="../collections.html">Collections<i class="level_3__trigger megamenu_trigger" data-submenu="submenu_1565951062484-3"></i></a>

																			
																				<ul class="level_3_2 droped_linklist" id="submenu_1565951062484-3">
																					

																							
																						<li class="level_3_2_item ">
																							<a class="level_3_2_link" href="../collections/accessories.html">Accessories</a>

																							
																						</li>
																					

																							
																						<li class="level_3_2_item ">
																							<a class="level_3_2_link" href="../collections/cameras-photography.html">Cameras & Photography</a>

																							
																						</li>
																					

																							
																						<li class="level_3_2_item ">
																							<a class="level_3_2_link" href="../collections/computing.html">Computing</a>

																							
																						</li>
																					

																							
																						<li class="level_3_2_item ">
																							<a class="level_3_2_link" href="../collections/laptops-computers.html">Laptops & computers</a>

																							
																						</li>
																					

																							
																						<li class="level_3_2_item ">
																							<a class="level_3_2_link" href="../collections/mobile.html">Mobile</a>

																							
																						</li>
																					

																							
																						<li class="level_3_2_item ">
																							<a class="level_3_2_link" href="../collections/frontpage.html">TV & Video</a>

																							
																						</li>
																					
																				</ul>
																			
																		</li>
																	


																		<li class="level_3__item ">
																			<a class="level_3__link" href="../collections/laptops-computers.html">Clearance</a>

																			
																		</li>
																	


																		<li class="level_3__item ">
																			<a class="level_3__link" href="sections-all.html">Sections All</a>

																			
																		</li>
																	


																		<li class="level_3__item ">
																			<a class="level_3__link" href="contact-us.html">Contact Us</a>

																			
																		</li>
																	


																		<li class="level_3__item ">
																			<a class="level_3__link" href="../blogs/news.html">Blog</a>

																			
																		</li>
																	
																</ul>
															</div>
														</li>
													</ul>
												

											

									</li>

								
									
									
									

									<li class="level_1__item " style="display: inline-block;">
										<a class="level_1__link " href="../collections/all.html">Catalog
											
											
										</a>

										

									</li>

								
									
									
									

									<li class="level_1__item level_2__small" style="display: inline-block;">
										<a class="level_1__link " href="../collections.html">Collections
											<i class="level_1__trigger megamenu_trigger" data-submenu="menu_1597063977258"></i>
											
										</a>

										
												
													<ul class="level_2" id="menu_1597063977258" style="display: none;">
														<li class="item_link-linklist">
															<div><ul class="level_3">
																	


																		<li class="level_3__item ">
																			<a class="level_3__link" href="../collections/accessories.html">Accessories</a>

																			
																		</li>
																	


																		<li class="level_3__item ">
																			<a class="level_3__link" href="../collections/cameras-photography.html">Cameras & Photography</a>

																			
																		</li>
																	


																		<li class="level_3__item ">
																			<a class="level_3__link" href="../collections/computing.html">Computing</a>

																			
																		</li>
																	


																		<li class="level_3__item ">
																			<a class="level_3__link" href="../collections/laptops-computers.html">Laptops & computers</a>

																			
																		</li>
																	


																		<li class="level_3__item ">
																			<a class="level_3__link" href="../collections/mobile.html">Mobile</a>

																			
																		</li>
																	


																		<li class="level_3__item ">
																			<a class="level_3__link" href="../collections/frontpage.html">TV & Video</a>

																			
																		</li>
																	
																</ul>
															</div>
														</li>
													</ul>
												

											

									</li>

								
									
									
									

									<li class="level_1__item " style="display: inline-block;">
										<a class="level_1__link " href="../collections/accessories.html">Clearance
											
											
										</a>

										

									</li>

								
									
									
									

									<li class="level_1__item " style="display: inline-block;">
										<a class="level_1__link " href="sections-all.html">Sections All
											
											
										</a>

										

									</li>

								
									
									
									

									<li class="level_1__item " style="display: inline-block;">
										<a class="level_1__link " href="contact-us.html">Contact Us
											
											
										</a>

										

									</li>

								

								<li class="megamenu_footer">
									
										
										<div class="menu_header_wishlist">
											<a href="wishlist.html">
												<span class="menu_header_wishlist_text">Wishlist</span>
												<span class="zemez_wishlist_total"></span>
											</a>
										</div>
									

									
										<div class="menu_header_account">
											<span>Account</span>
											
												<a href="../account/login.php">Account</a>
											
										</div>
									

									
										
										

										<div class="menu_currency_selector__wrap">
											<span>Currency</span>
											<div id="menu_currency_selector">
													<label id="menu_currency_selected">
														<input class="menu_currency_selector__item" type="radio" name="menu_currency" value="USD" data-value="USD">
														USD
													</label>

												
													
												
													
														<label >
															<input class="menu_currency_selector__item" type="radio" name="menu_currency" value="EUR" data-value="EUR">
															EUR
														</label>
													
												
													
														<label >
															<input class="menu_currency_selector__item" type="radio" name="menu_currency" value="GBP" data-value="GBP">
															GBP
														</label>
													
												
											</div>
										</div>
									
								</li>
							</ul>

						</nav>
					
				</div>

			</div>
		</div>
	</div>
</header>




</div>
					

				<div class="page_container">
					
						<div class="breadcrumbs">
	<div class="container">
		<ul>
			<li><a href="../index.html">Home</a></li>

			
					<li><span>Wishlist</span></li>

			
		</ul>
	</div>
</div>
					

					
					
							<div class="main_content  ">
								<div id="shopify-section-template-wishlist" class="shopify-section section_template section_template__wishlist">
	
	
<div class="wishlist_page" id="wishlist_page" data-customer="false">
		<div  class="container">
			
			<h1 class="page_heading">Wishlist</h1>

			<div class="page_content">

  <?php 
    extract($_GET);
    $UserID = $_SESSION['ui'];
    $con = mysqli_connect("localhost","root","","mobileshop");

    $sql = "SELECT wishlist.WishlistID, product.ProductID, product.ProductName, product.Price, product.image, product.ProductType, product.ProductBrand
            FROM wishlist
            INNER JOIN product
            ON wishlist.ProductID = product.ProductID
            INNER JOIN user
            ON wishlist.UserID = user.UserID
            where user.UserID = $UserID";


    $result = mysqli_query($con,$sql);
  ?>


<table border="2px" class="table table-resposive table-hover">
  <tr>

    <th>Image</th>
    <th>Wishlist ID</th>
    <th>Product Brand</th>
    <th>Product Name</th>
    <th>Product Type</th>
    <th>Price</th>
    <th>Delete</th>
    
  </tr>
  <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><img src="<?php echo($row['image']); ?>"  width="250" height="250"></td>
      <td><?php echo($row['WishlistID']); ?></td>
      <td><?php echo($row['ProductBrand']); ?></td>
      <td><?php echo($row['ProductName']); ?></td>
      <td><?php echo($row['ProductType']); ?></td>
      <td><?php echo($row['Price']); ?></td>
      <td>
          <a href="con_WishlistDelete.php?id=<?php echo($row['WishlistID']); ?>"  onclick="return confirm('Are you sure for this product delete')"><input type="button" class="btn" value="delete"></a>
      </td>
    </tr>

  <?php 
  } 
  ?>
</table>


				

				

					<!-- <p class="alert alert-warning"><a href='../account/login.php'>Please, sign in to add products to the wishlist</a></p> -->

				

				<!-- <p id="wishlist_empty" class="alert alert-warning hidden">Your wishlist is empty</p> -->

			</div>
		</div>
	</div>








</div>
 
							    
							</div>

							
					
					
					
						
								<div id="shopify-section-footer-2" class="shopify-section"><footer class="footer_type_2" style="background-color: #c8e4ff;"> 
	<div class="footer_row__1"> 
		
			<div class="footer_top_pannel">
				<div class="container">
					<div class="footer_newsletter_caption">
						<h4>Get our latest news and special sales</h4>
						
						
							<p class="form_text">You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
						
					</div>
					
					

														<form method="post" action="https://theme905-computer-shop.myshopify.com/contact#contact_form" id="newsletter_form" accept-charset="UTF-8" class="footer_newsletter_form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />																				<p class="alert alert-success hidden">You have successfully subscribed!</p>																			<input type="hidden" name="contact[tags]" value="Newsletter subscriber">										<div class="form_wrapper">											<input type="email" name="contact[email]" class="input-group__field newsletter__input" placeholder="Enter your email">											<button class="btn" type="submit">Get</button>										</div>																			</form>								
				</div>
			</div>
		

		<div class="footer_main">
			
				<div class="col-sm-3 footer_block footer_block__2_1">
					
<div class="footer_item footer_item__links " >
								<h6 class="linklist_menu_title">Your Account</h6>

								<ul class="list_links">
									
										<li>
											<a  href="../account/login.php">Personal info</a>
										</li>
									
										<li>
											<a  href="../account/login.php">Orders</a>
										</li>
									
										<li>
											<a  href="../account/login.php">Credit slips</a>
										</li>
									
										<li>
											<a  href="../account/login.php">Addresses</a>
										</li>
									
								</ul>
							</div>

					
						 
				</div>
			
				<div class="col-sm-3 footer_block ">
					
							<div class="footer_item footer_item__contacts">
								<h6 class="linklist_menu_title">Customer  Service</h6>
								<ul class="list_links">
								
									<div class="contact_address"><p>Monday to Friday <br>10am - 6.30pm (NewYork time) </p></div>
								

								
									<a class="contact_phone tel_ltr" href="tel:+(001) 23 45 67 89">
									+(001) 23 45 67 89</a>
								

								
									<a class="contact_email" href="mailto:shopify@zemez.io">shopify@zemez.io</a>
								
								</ul>
							</div>
					 
				</div>
			
				<div class="col-sm-3 footer_block footer_block__2_1">
					
							<div class="footer_item footer_item__contacts">
								<h6 class="linklist_menu_title">OUR GUARANTEES</h6>
								<ul class="list_links">
								
									<div class="contact_address"><p>Shipping in 3 days</p>
<p>Free returns within 14 days</p>
<p>Secure payments</p></div>
								

								

								
								</ul>
							</div>
					 
				</div>
			
				<div class="col-sm-3 footer_block ">
					
<div class="footer_item footer_item__links " >
								<h6 class="linklist_menu_title">Our Company</h6>

								<ul class="list_links">
									
										<li>
											<a  href="delivery-info.html">Delivery</a>
										</li>
									
										<li>
											<a  href="privacy-policy.html">Legal Notice</a>
										</li>
									
										<li>
											<a  href="about-us.html">About Us</a>
										</li>
									
										<li>
											<a  href="contact-us.html">Contact Us</a>
										</li>
									
										<li>
											<a  href="privacy-policy.html">Terms and conditions of use</a>
										</li>
									
								</ul>
							</div>

					
						 
				</div>
			
		</div>
	</div>

	
		

		<div class="footer_row__2"> 
			<div class="footer_bottom_pannel container_big">
				
					
					<div class="footer_wrap_2 footer_copyright">
						© 2021. <a target="_blank" rel="nofollow" href="https://www.shopify.com/?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify</a>
					</div>
				

				
					

					<div class="footer_wrap_2">
						<div class="footer_payments">
							
								
							
								
									<img src="http://cdn.shopify.com/shopifycloud/shopify/assets/payment_icons/apple_pay-f6db0077dc7c325b436ecbdcf254239100b35b70b1663bc7523d7c424901fa09.svg" height="18" alt="apple_pay">
								
							
								
							
								
									<img src="http://cdn.shopify.com/shopifycloud/shopify/assets/payment_icons/bitcoin-e41278677541fc32b8d2e7fa41e61aaab2935151a6048a1d8d341162f5b93a0a.svg" height="18" alt="bitcoin">
								
							
								
							
								
									<img src="http://cdn.shopify.com/shopifycloud/shopify/assets/payment_icons/diners_club-16436b9fb6dd9060edb51f1c7c44e23941e544ad798282d6aef1604319562fba.svg" height="18" alt="diners_club">
								
							
								
							
								
							
								
							
								
							
								
									<img src="http://cdn.shopify.com/shopifycloud/shopify/assets/payment_icons/jcb-ab0f5a1739704f1ab039f19ac8c28895af5c39a3f54ee9b748ea051986b0bd36.svg" height="18" alt="jcb">
								
							
								
							
								
							
								
							
								
							
								
									<img src="http://cdn.shopify.com/shopifycloud/shopify/assets/payment_icons/visa-319d545c6fd255c9aad5eeaad21fd6f7f7b4fdbdb1a35ce83b89cca12a187f00.svg" height="18" alt="visa">
								
							
						</div>
					</div>
				

				
					<ul class="footer_wrap_2 social_menu">
						
							<li><a href="https://www.facebook.com/zemezlab/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						

						
							<li><a href="https://twitter.com/zemezlab"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						

						
							<li><a href="https://www.instagram.com/zemezlab"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						

						

						
							<li><a href="https://www.youtube.com/channel/UCPW43un8VFXHe9LxKpR_2Hg"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						
					</ul>
				
			</div>
		</div>
	
</footer>

	

</div>
							
					
				</div>

				<a id="back_top" href="#">
					<i class="fa fa-angle-up" aria-hidden="true"></i>
				</a>
			
		</div>



		


	</body>


<!-- Mirrored from theme905-computer-shop.myshopify.com/pages/wishlist by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 06:21:24 GMT -->
</html>




