<?php
$allowedRequests = ['moosh' => 'processMooshRequest'];
$intersection = array_intersect_key($allowedRequests, $_GET);
if (count($intersection) === 0) {
    die("No route specified");
} else {
    foreach ($intersection as $route => $handler) {
        if (function_exists($handler)) {
            echo call_user_func($handler, $_GET[$route]);
        }
    }
}

function processMooshRequest($name)
{
    $data = json_decode('[
   {
      "name":"sarthas",
      "videos":[
         "G85GUfuJTg4"
      ]
   },
   {
      "name":"addictg",
      "videos":[
         "DbvNphZcQDE",
         "O2wbq1gcERk"
      ]
   },
   {
      "name":"beznogim",
      "videos":[
         "8VIllAilTnE"
      ]
   },
   {
      "name":"brotherbrand",
      "videos":[
         "Oy9dfZhDbik"
      ]
   },
   {
      "name":"draloscop",
      "videos":[
         "ocW3fBqPQkU"
      ]
   },
   {
      "name":"fatbats",
      "videos":[
         "DIBOF8VWpk4"
      ]
   },
   {
      "name":"irishdash",
      "videos":[
         "rHMne2T9wvY",
         "_BSK744MmCI",
         "VCEsveSK5to",
         "xCeYTKLK0iU",
         "6hy4dLkqRO8",
         "KaOC9danxNo",
         "2EW5xxdR9RE"
      ]
   },
   {
      "name":"jakut",
      "videos":[
         "-OhNoDT3us8"
      ]
   },
   {
      "name":"kanootoko",
      "videos":[
         "PpGF9bDTLoI"
      ]
   },
   {
      "name":"kaodekai",
      "videos":[
         "-h7dkPIqoqw"
      ]
   },
   {
      "name":"lunarcatrus",
      "videos":[
         "DACXFfxAYD4"
      ]
   },
   {
      "name":"mouseori",
      "videos":[
         "ykwqXuMPsoc"
      ]
   },
   {
      "name":"pitondapiton",
      "videos":[
         "SNBZqb30u80",
         "cwJKjuyLv80"
      ]
   },
   {
      "name":"savesatan",
      "videos":[
         "9ryJB-FF_Jg"
      ]
   },
   {
      "name":"sharpieboob",
      "videos":[
         "9UOweeSdI2k"
      ]
   },
   {
      "name":"temalj",
      "videos":[
         "QrU1hZxSEXQ"
      ]
   },
   {
      "name":"velik",
      "videos":[
         "Al50oiw3D4I",
         "WBAIyY9y3HM"
      ]
   },
   {
      "name":"vertoletique",
      "videos":[
         "n3Go8ub9a1k"
      ]
   },
   {
      "name":"ololoshkin",
      "videos":[
         "vdSqLfuRN18",
         "eFkmRp_G2uo"
      ]
   },
   {
      "name":"octodown",
      "videos":[
         "JHPV-XF0vx0"
      ]
   },
   {
      "name":"idbalda",
      "videos":[
         "0gYTf8GHjoU",
         "x0vYukWDMS0",
         "ZSIgok-lolA"
      ]
   },
   {
      "name":"helvegen",
      "videos":[
         "z0PvZGVPiJU"
      ]
   },
   {
      "name":"shevchuk",
      "videos":[
         "_O0m4PdQz8M"
      ]
   },
   {
      "name":"openvms",
      "videos":[
         "whuoY8TRlWM"
      ]
   },
   {
      "name":"marshmeloy",
      "videos":[
         "S7zHZrcHdxg",
         "B-TReh13LXg"
      ]
   },
   {
      "name":"amyra",
      "videos":[
         "wHzcPFplvCM"
      ]
   },
   {
      "name":"luckoustic",
      "videos":[
         "RBumgq5yVrA"
      ]
   },
   {
      "name":"wudmantyan",
      "videos":[
         "gGdGFtwCNBE",
         "AFjVpK-j8Mo"
      ]
   },
   {
      "name":"istaa",
      "videos":[
         "Up09vwkwDmc",
         "BFe_b1H0wAo"
      ]
   },
   {
      "name":"slowpokbi",
      "videos":[
         "KrKfE4qOKCE"
      ]
   },
   {
      "name":"hazardouss",
      "videos":[
         "eLPBwJBsPbY"
      ]
   },
   {
      "name":"xpuctocuucyc",
      "videos":[
         "Cf72ljWJqAY",
         "Fq690cbEhIU",
         "InRMwptcgAo"
      ]
   },
   {
      "name":"neeewfriend",
      "videos":[
         "zt1R8LQ5-LI"
      ]
   },
   {
      "name":"kotyay",
      "videos":[
         "_caCTj4cnj4",
         "f8hYGbZ10OI"
      ]
   },
   {
      "name":"aphromouse",
      "videos":[
         "zuDtACzKGRs"
      ]
   },
   {
      "name":"sguschenka",
      "videos":[
         "ohrel37KKd0"
      ]
   },
   {
      "name":"lososnuley",
      "videos":[
         "4nsGF13kqWQ",
         "zvFwzuaVZDc"
      ]
   },
   {
      "name":"putinv",
      "videos":[
         "V22MJIaV2Kk",
         "lXX7dRULFaE"
      ]
   },
   {
      "name":"gailzipp",
      "videos":[
         "ytzV5XNFiJY",
         "TA9mVLomYo8",
         "09HwcEacdfI"
      ]
   },
   {
      "name":"luzha",
      "videos":[
         "NWxISwEBU0U"
      ]
   },
   {
      "name":"nufrifin",
      "videos":[
         "j7ZqxcZo7JQ"
      ]
   },
   {
      "name":"borzix",
      "videos":[
         "EkZ3XbcQLmg"
      ]
   },
   {
      "name":"scomish",
      "videos":[
         "91JYV4fKK5E"
      ]
   },
   {
      "name":"hipsterpower",
      "videos":[
         "vTIIMJ9tUc8"
      ]
   },
   {
      "name":"rulolxd",
      "videos":[
         "gAQtC39q3Ig"
      ]
   },
   {
      "name":"stasyamba",
      "videos":[
         "BlP0WGwembM"
      ]
   },
   {
      "name":"umiho",
      "videos":[
         "XIictPv-5MI",
         "aW8BDgLpZkI"
      ]
   },
   {
      "name":"albiona",
      "videos":[
         "TBKN7_vx2xo"
      ]
   },
   {
      "name":"zettaidesu",
      "videos":[
         "ez8no0SMnUc",
         "r1G8BVeI_K8"
      ]
   }
]', true);
    $returnedData = [];
    switch ($name) {
        case 'all':
            $returnedData = $data;
            break;
        default:
            foreach ($data as $moosh) {
                if ($moosh['name'] == $name) {
                    $returnedData = $moosh;
                    break;
                }
            }
            break;
    }
    return json_encode($returnedData);
}
