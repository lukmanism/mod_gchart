<?php
/**
 *
 *
 * @package   mod_timeline
 * copyright Lukman Hussein
 * @license GPL3
 */

// no direct access
error_reporting(1);
defined('_JEXEC') or die;

//Collect Parameters

$url = JURI::base();

$title      = $params->get('title');
$keyid      = $params->get('keyid');
$width      = $params->get('width');
$height     = $params->get('height');
$chart_id   = $params->get('chart_id');
$column1    = $params->get('column1');
$column2    = $params->get('column2');
$column3    = $params->get('column3');
$column4    = $params->get('column4');
$column5    = $params->get('column5');

if(!empty($column1)||$column1!=" "){ $tableval[] = explode(",",$column1); }
if(!empty($column2)||$column2!=" "){ $tableval[] = explode(",",$column2); }
if(!empty($column3)||$column3!=" "){ $tableval[] = explode(",",$column3); }
if(!empty($column4)||$column4!=" "){ $tableval[] = explode(",",$column4); }
if(!empty($column5)||$column4!=" "){ $tableval[] = explode(",",$column5); }

echo $script = '<script type="text/javascript" src="http://www.google.com/jsapi"></script>';

// $doc =& JFactory::getDocument();
// $doc->addCustomTag( $scripts );
?>

<h3><?= $title ?></h3>
<div id="<?= $chart_id ?>" style="width:<?= $width ?>px; height:<?= $height ?>px;"></div>

<script type="text/javascript">


google.load('visualization', '1', {packages: ['corechart']});

function drawVisualization() {
  // Create and populate the data table.
  var data = google.visualization.arrayToDataTable([
    ['Date','Fund','Benchmark'],
['20010927',100,100],
['20010928',99.9787234,100.440715591538],
['20011001',99.9787234,100.213828675894],
['20011002',99.95744681,100.669234787151],
['20011003',99.95744681,100.665970227213],
['20011004',99.95744681,99.740467484983],
['20011005',99.95744681,99.4058500914077],
['20011008',99.87234043,97.8992556803343],
['20011009',99.85106383,99.5135805693392],
['20011010',99.82978723,98.573387307391],
['20011011',99.78723404,99.4695090101854],
['20011012',99.78723404,99.7845390441369],
['20011015',99.78723404,101.021807260381],
['20011016',99.93617021,100.687189866806],
['20011017',100.1276596,101.459258291982],
['20011018',100.1702128,101.327043614521],
['20011019',100.1702128,100.388482632541],
['20011022',99.95744681,99.4205406111256],
['20011023',100.0851064,100.159963436929],
['20011024',100.0851064,100.613737268216],
['20011025',100.0212766,100.403173152259],
['20011026',100.106383,99.9624575607208],
['20011029',100.1489362,98.8835205014364],
['20011030',100.106383,98.4574954296161],
['20011031',100.106383,97.9482240793941],
['20011101',99.93617021,97.2871506920867],
['20011102',100.212766,97.3899843301123],
['20011105',100.1276596,96.7697179420214],
['20011106',100.0425532,96.7533951423348],
['20011107',100.1489362,96.6734134238704],
['20011108',100.5744681,97.703382084095],
['20011109',100.6808511,97.8470227213371],
['20011112',100.8510638,98.5374771480804],
['20011113',100.893617,100.013058239749],
['20011115',101.8297872,103.241708017759],
['20011116',102.0212766,103.700378688953],
['20011119',101.9787234,102.530033951423],
['20011120',101.2765957,102.079524680073],
['20011121',102,103.308631496474],
['20011123',102.8510638,104.389200835727],
['20011126',103.5531915,104.54426743275],
['20011127',102.5106383,104.196591799425],
['20011128',101.9574468,104.638939670932],
['20011129',101.5957447,104.784212588143],
['20011130',101.4468085,104.14272656046],
['20011203',101.4468085,105.012731783755],
['20011204',102.0851064,105.691760250718],
['20011205',104.1914894,106.589514233481],
['20011206',105.1276596,107.13959258292],
['20011207',105.5531915,107.978584486811],
['20011210',107.2765957,108.891028989292],
['20011211',106.9361702,109.050992426221],
['20011212',106.7659574,109.235440062679],
['20011213',105.0638298,108.058566205275],
['20011214',106.3404255,108.402977278663],
['20011220',107,108.130386523896],
['20011221',106.5319149,108.554779315748],
['20011224',106.5744681,109.294202141551],
['20011226',107.7021277,110.880778271089],
['20011228',109.0212766,112.895011752416],
['20011231',109.3191489,113.621376338469],
['20020102',108.893617,111.456973100026],
['20020103',110.2340426,111.563071297989],
['20020104',113.106383,113.193718986681],
['20020107',114.3404255,113.787868895273],
['20020108',113.8723404,112.988051710629],
['20020109',115.106383,114.336314964743],
['20020110',116.0851064,115.074105510577],
['20020111',115.5106383,114.755810916688],
['20020114',114.5744681,114.006594411073],
['20020115',114.0638298,114.336314964743],
['20020116',113.8297872,114.360799164273],
['20020117',113.787234,113.911922172891],
['20020118',114.3617021,114.019652650823],
['20020121',113.9361702,113.59689213894],
['20020122',112.7021277,112.664860276835],
['20020123',111.9574468,112.392269522068],
['20020124',111.6170213,111.966244450248],
['20020125',115.0212766,113.211674066336],
['20020128',117.7446809,115.175306868634],
['20020129',118.3404255,115.291198746409],
['20020130',118.7234043,115.891877774876],
['20020131',119.9148936,117.331548707234],
['20020204',121.8723404,118.101984852442],
['20020205',120.7446809,117.578022982502],
['20020206',120.7446809,116.743927918516],
['20020207',119.8085106,115.513188822147],
['20020208',119.3404255,116.042047531993],
['20020214',120.0851064,116.677004439801],
['20020215',121.5744681,117.847349177331],
['20020218',121.3617021,117.708605379995],
['20020219',123.2978723,119.112366153042],
['20020220',122.787234,117.979563854792],
['20020221',122.4893617,117.098132671716],
['20020222',120.6808511,115.991446852964],
['20020225',120.7446809,114.47342648211],
['20020226',119.7446809,114.4375163228],
['20020227',120.2765957,114.89945155393],
['20020228',121.1702128,115.713959258292],
['20020301',122.0851064,117.127513711152],
['20020304',124.893617,118.32397492818],
['20020305',127.2765957,120.24843301123],
['20020306',126.6382979,120.307195090102],
['20020307',127.0851064,121.069469835466],
['20020308',129.6808511,122.034147296944],
['20020311',131.893617,124.218137895012],
['20020312',132.2340426,123.011882998172],
['20020313',132.5744681,123.157155915383],
['20020314',131.9787234,122.688691564377],
['20020318',133.6595745,123.6354139462],
['20020319',134.5531915,123.117981196135],
['20020320',135.4042553,123.228976234004],
['20020321',135.5957447,123.436275790023],
['20020322',135.7446809,122.850287281274],
['20020325',135.0638298,121.810524941238],
['20020326',135.4893617,122.633194045443],
['20020327',137.0851064,123.483611909115],
['20020328',138.8085106,123.24529903369],
['20020329',138.7234043,123.4166884304],
['20020401',138.6170213,123.627252546357],
['20020402',137.7021277,123.305693392531],
['20020403',137.106383,123.313854792374],
['20020404',137.5744681,122.814377121964],
['20020405',139.1276596,124.285061373727],
['20020408',141.3829787,126.054452859754],
['20020409',143.5319149,126.645338208409],
['20020410',144.212766,126.433141812484],
['20020411',144.3191489,126.46252285192],
['20020412',145.5744681,126.699203447375],
['20020415',147.5106383,128.058892661269],
['20020416',147.212766,127.663880908853],
['20020417',149.2340426,129.299425437451],
['20020418',148.2765957,128.497975972839],
['20020419',150.4468085,130.313071297989],
['20020422',151.2553191,131.77396186994],
['20020423',150.2978723,131.899647427527],
['20020424',148.9787234,130.502415774354],
['20020426',148.7234043,130.806019848524],
['20020429',147.4893617,129.072538521807],
['20020430',148.3617021,129.601397231653],
['20020502',148.8510638,129.823387307391],
['20020503',149.1276596,129.710759989553],
['20020506',149.2340426,129.782580308174],
['20020507',148.6595745,128.938691564377],
['20020508',149.1489362,129.679746670149],
['20020509',149.7021277,130.526899973884],
['20020510',149.1489362,128.711804648733],
['20020513',142.3404255,128.3021023766],
['20020514',148.6170213,128.217223818229],
['20020515',149.0425532,128.419626534343],
['20020516',149.2978723,128.359232175503],
['20020517',149.4893617,128.599177330896],
['20020520',149.0638298,128.062157221207],
['20020521',148.0425532,127.598589710107],
['20020522',146.3617021,126.165447897623],
['20020523',144.8085106,125.29217811439],
['20020524',145.0851064,125.009793679812],
['20020528',144.212766,124.265474014103],
['20020529',144.212766,124.565813528336],
['20020530',143.9361702,123.943914860277],
['20020531',143.0851064,121.075998955341],
['20020603',143.106383,122.257769652651],
['20020604',142.7446809,122.512405327762],
['20020605',143.3617021,121.919887699138],
['20020606',144.2765957,122.891094280491],
['20020607',144.3829787,123.271415513189],
['20020610',144.4680851,123.274680073126],
['20020611',144.8297872,122.484656568295],
['20020612',145.0851064,122.51403760773],
['20020613',145.2765957,122.974340558893],
['20020614',145,122.177787934186],
['20020617',144.2978723,121.892138939671],
['20020618',144.6808511,121.999869417603],
['20020619',143.7446809,121.425306868634],
['20020620',144.1276596,121.812157221207],
['20020621',143.6382979,121.335531470358],
['20020624',139.3617021,118.585139723165],
['20020625',138.7234043,117.06875163228],
['20020626',135.1276596,115.08226691042],
['20020627',136.2765957,116.149778009924],
['20020628',138.6170213,118.412118046487],
['20020701',138.4042553,118.283167928963],
['20020702',140.6595745,121.337163750326],
['20020703',141.787234,120.682619482894],
['20020704',142.2553191,121.041721075999],
['20020705',143.3191489,121.542831026378],
['20020708',143.2340426,120.099895534082],
['20020709',144.6808511,121.373073909637],
['20020710',145,121.306150430922],
['20020711',144.2765957,120.601005484461],
['20020712',145.0212766,120.764233481327],
['20020715',145.0212766,120.646709323583],
['20020716',144.5319149,119.868111778532],
['20020717',144.4255319,119.34741446853],
['20020718',144.4680851,119.788130060068],
['20020719',143.3829787,118.581875163228],
['20020722',141.9574468,116.964285714286],
['20020723',142.6595745,118.229302689997],
['20020724',141.7234043,116.724340558893],
['20020725',142.3191489,117.33644554714],
['20020726',141.7446809,117.150365630713],
['20020729',142,117.684121180465],
['20020730',142.4893617,117.834290937582],
['20020731',143.3404255,117.783690258553],
['20020801',143.7878492,118.106881692348],
['20020802',143.4817172,117.447440585009],
['20020805',143.0107449,117.711869939932],
['20020806',142.4691267,117.390310786106],
['20020807',142.6810643,117.793483938365],
['20020808',143.2226825,117.932227735701],
['20020809',143.2226825,118.04322277357],
['20020812',143.5523631,118.181966570906],
['20020813',144.9417314,119.040545834422],
['20020814',144.7297939,119.154805432228],
['20020815',146.2369053,119.820775659441],
['20020816',147.0140096,120.233742491512],
['20020819',147.1553013,120.2239488117],
['20020820',147.1317527,119.806085139723],
['20020821',146.7314262,119.285387829721],
['20020822',146.5665859,119.158069992165],
['20020823',146.6607804,119.154805432228],
['20020826',146.2133567,118.909963436929],
['20020827',146.3310998,118.949138156177],
['20020828',145.459801,118.294593888744],
['20020829',143.9762382,116.730869678767],
['20020830',144.0704326,116.113867850614],
['20020902',143.8113979,116.44685296422],
['20020903',143.2226825,116.373400365631],
['20020904',142.210092,115.540937581614],
['20020905',142.1629947,115.230804387569],
['20020906',139.5490984,113.294920344738],
['20020909',137.853598,111.517367458867],
['20020910',138.9839316,112.271480804388],
['20020911',140.0200707,112.578349438496],
['20020912',141.1739529,113.298184904675],
['20020913',140.1378138,112.348197962915],
['20020916',138.7955426,111.695285975451],
['20020917',140.3497513,112.705667276051],
['20020918',139.5961956,110.539631757639],
['20020919',139.0545774,110.27030556281],
['20020920',138.0890842,109.793679811961],
['20020923',135.8519656,108.135283363803],
['20020924',133.6383957,106.818033429094],
['20020925',130.435784,103.93542700444],
['20020926',130.5299784,104.438169234787],
['20020927',131.966444,105.667276051188],
['20020930',130.9538535,104.141094280491],
['20021001',131.2128883,105.280425698616],
['20021002',131.9193468,105.522003133978],
['20021003',131.4954717,105.513841734134],
['20021004',131.0951452,105.133520501436],
['20021007',130.741916,104.807064507704],
['20021008',130.2002978,105.076390702533],
['20021009',130.0119089,104.715656829459],
['20021010',128.6696378,103.672629929486],
['20021011',128.9522212,104.103551841212],
['20021014',127.2802694,102.835270305563],
['20021015',126.3618734,101.880386523897],
['20021016',127.8925334,103.561634891617],
['20021017',128.1986655,104.291264037608],
['20021018',130.8361104,106.465460955863],
['20021021',130.3415895,106.491577435362],
['20021022',131.0715966,106.804975189345],
['20021023',130.2709437,106.550339514234],
['20021024',132.0370899,107.044920344738],
['20021025',132.8141942,107.025332985114],
['20021028',134.5096945,108.184251762862],
['20021029',134.7922779,107.883912248629],
['20021030',133.9680764,107.361582658658],
['20021031',134.4390487,107.660289892922],
['20021101',133.8267847,107.302820579786],
['20021105',133.9445278,106.741316270567],
['20021106',134.8864724,107.510120135806],
['20021107',134.5803404,107.033494384957],
['20021108',134.6745348,107.18856098198],
['20021111',134.0387222,106.61563071298],
['20021112',133.8032361,106.375685557587],
['20021113',133.497104,105.598720292505],
['20021114',133.0967776,105.46977017498],
['20021115',133.379361,105.752154609559],
['20021118',133.7325902,105.104139462001],
['20021119',132.0135412,104.046422042309],
['20021120',131.8957982,104.003982763124],
['20021121',132.8612914,104.173739879864],
['20021122',133.2380693,104.322277357012],
['20021125',134.0622708,105.006202663881],
['20021126',134.4861459,104.576913032123],
['20021127',133.6383957,103.22864977801],
['20021128',133.991625,102.974014102899],
['20021129',133.8974305,102.706320188039],
['20021202',133.3087151,101.896709323583],
['20021203',132.2254788,100.623530948028],
['20021204',133.1674234,100.935296422042],
['20021209',135.6871253,104.101919561243],
['20021210',134.6509862,103.385348655001],
['20021211',135.0748613,103.677526769392],
['20021212',134.8393752,103.532253852181],
['20021213',134.4861459,103.192739618699],
['20021216',134.0858194,102.747127187255],
['20021217',134.5096945,103.75261164795],
['20021218',134.7687293,103.781992687386],
['20021219',134.603889,103.941956124314],
['20021220',134.3919515,104.144358840428],
['20021223',134.1800139,104.335335596762],
['20021224',134.2742084,104.655262470619],
['20021226',134.2035625,105.783167928963],
['20021227',134.7922779,106.161856881692],
['20021230',134.4155001,105.841930007835],
['20021231',135.0984099,105.497518934448],
['20030102',134.0387222,103.230282057979],
['20030103',134.0387222,103.404936014625],
['20030106',133.9209791,102.489226952207],
['20030107',133.9680764,102.208474797597],
['20030108',134.0858194,102.038717680857],
['20030109',134.0622708,102.275398276312],
['20030110',134.9806669,103.783624967354],
['20030113',137.1235909,106.339775398276],
['20030114',138.5129593,107.960629407156],
['20030115',139.0074802,109.070579785845],
['20030116',139.1723205,109.385609819796],
['20030117',139.1016747,109.449268738574],
['20030120',138.8661885,108.768607991643],
['20030121',140.7029805,110.320906241839],
['20030122',140.797175,109.756137372682],
['20030123',139.8081331,109.490075737791],
['20030124',139.0545774,109.168516583965],
['20030127',136.6761672,108.484591277096],
['20030128',138.8661885,109.628819535127],
['20030129',138.8661885,108.618438234526],
['20030130',138.2774731,108.509075476626],
['20030205',138.7013482,109.065682945939],
['20030206',139.2900636,108.538456516062],
['20030207',139.1958691,107.934512927657],
['20030210',137.4532715,107.479106816401],
['20030211',137.6652091,107.722316531732],
['20030213',137.547466,107.165709062418],
['20030214',137.3590771,107.232632541133],
['20030217',138.2068272,107.621115173675],
['20030218',138.2539245,107.314246539567],
['20030219',138.3481189,107.887176808566],
['20030220',138.0655356,106.966570906242],
['20030221',137.5710146,106.831091668843],
['20030224',136.9587506,106.352833638026],
['20030225',136.4642297,106.609101593105],
['20030226',136.0874518,106.21408984069],
['20030227',135.6871253,106.496474275268],
['20030228',135.9461601,105.575868372943],
['20030303',135.7813198,105.970880125359],
['20030305',134.7922779,104.967027944633],
['20030306',134.4625973,104.862562026639],
['20030307',133.4500068,103.757508487856],
['20030310',131.5190203,101.981587881954],
['20030311',130.4122354,101.074040219378],
['20030312',131.660312,102.686732828415],
['20030313',131.8957982,102.419038913554],
['20030314',132.3667705,102.596957430138],
['20030317',131.8957982,101.627383128754],
['20030318',133.6148471,102.357012274745],
['20030319',134.1564653,102.49738835205],
['20030320',135.710674,103.164990859232],
['20030321',134.9571182,103.187842778793],
['20030324',135.3809933,103.344541655785],
['20030325',134.3684028,102.77814050666],
['20030326',134.9335696,103.321689736224],
['20030327',134.6980835,103.297205536694],
['20030328',134.4155001,103.64324889005],
['20030331',133.7325902,103.767302167668],
['20030401',132.4609649,102.361909114651],
['20030402',132.9554859,102.665513188822],
['20030403',133.3322637,102.59532515017],
['20030404',133.4029096,103.000130582398],
['20030407',135.216153,104.523047793158],
['20030408',134.8629238,104.478976234004],
['20030409',133.497104,103.553473491773],
['20030410',132.0841871,102.820579785845],
['20030411',132.1077357,102.783037346566],
['20030414',133.9209791,101.88854792374],
['20030415',132.88484,103.024614781928],
['20030416',133.3558124,103.449007573779],
['20030417',133.3087151,103.057260381301],
['20030418',133.7325902,103.749347088013],
['20030421',133.5206527,103.535518412118],
['20030422',133.4264582,103.321689736224],
['20030423',132.7435483,102.771611386785],
['20030424',134.0387222,101.96200052233],
['20030425',131.5425689,102.463110472708],
['20030428',130.9538535,101.883651083834],
['20030429',132.767097,102.513711151737],
['20030430',133.9680764,102.894032384435],
['20030502',133.4029096,102.386393314181],
['20030505',134.3919515,103.063789501175],
['20030506',134.5332432,103.132345259859],
['20030507',134.6509862,103.205797858449],
['20030508',134.2742084,102.970749542962],
['20030509',134.1564653,102.856489945156],
['20030512',134.6980835,103.478388613215],
['20030513',135.4516392,103.77709584748],
['20030516',136.1110004,103.855445285976],
['20030519',136.322938,103.924001044659],
['20030520',136.2758407,103.969704883782],
['20030521',136.3935838,104.526312353095],
['20030522',137.8065008,104.833180987203],
['20030523',140.4439458,106.241838600157],
['20030526',141.90396,107.035126664926],
['20030527',141.3623418,106.442609036302],
['20030528',144.0939812,108.383389919039],
['20030529',144.6826966,109.697375293811],
['20030530',145.1772176,109.60107077566],
['20030602',145.4362524,109.663097414469],
['20030603',146.6136832,110.108709845913],
['20030604',146.0014191,109.826325411335],
['20030605',148.4504752,111.39168190128],
['20030606',148.1914404,111.251305823975],
['20030609',149.8398435,111.714873335075],
['20030610',149.7221005,111.332919822408],
['20030611',152.9718095,112.400430921912],
['20030612',153.5134276,112.679550796553],
['20030613',154.1963375,112.617524157744],
['20030616',152.5950316,111.528793418647],
['20030617',156.0095809,111.820971533038],
['20030618',155.821192,111.608775137112],
['20030619',153.3014901,111.270893183599],
['20030620',156.8808797,111.393314181249],
['20030623',156.8337825,111.796487333508],
['20030624',152.6421288,110.787738312876],
['20030625',154.0550458,111.373726821625],
['20030626',154.2434347,111.439018020371],
['20030627',157.9876647,112.863998433011],
['20030630',157.9405674,112.947244711413],
['20030701',158.1289564,113.211674066336],
['20030702',160.9076931,114.791721075999],
['20030703',165.0522495,117.839187777488],
['20030704',166.4180692,118.358252807522],
['20030707',167.6896945,119.221728910943],
['20030708',167.8309862,118.666753721599],
['20030709',168.1606668,118.449660485767],
['20030710',169.4087434,118.152585531471],
['20030711',169.4793893,118.160746931314],
['20030714',171.6694106,118.684708801254],
['20030715',171.6223133,119.056868634108],
['20030716',170.7274659,118.234199529904],
['20030717',168.4667988,116.814115957169],
['20030718',168.9613197,116.956124314443],
['20030721',169.5500351,117.468660224602],
['20030722',168.513896,116.358709845913],
['20030723',168.0900209,116.360342125882],
['20030724',167.7367917,115.952272133717],
['20030725',167.8780834,115.978388613215],
['20030728',167.2658194,115.604596500392],
['20030729',168.702285,116.166100809611],
['20030730',170.2800422,117.640049621311],
['20030731',171.6929592,117.615565421781],
['20030801',173.3475819,118.01873857404],
['20030804',173.6061167,118.053016453382],
['20030805',174.1490398,117.888156176548],
['20030806',173.890505,117.346239226952],
['20030807',174.0456258,117.489879864194],
['20030808',174.8987907,117.88489161661],
['20030811',175.8295159,118.639004962131],
['20030812',176.7085343,118.211347610342],
['20030813',179.009494,118.21461217028],
['20030814',180.8192375,118.741838600157],
['20030815',180.6124097,118.913227996866],
['20030818',182.7582485,118.967093235832],
['20030819',183.9992156,119.494319665709],
['20030820',184.2836038,119.522068425176],
['20030821',186.8430983,120.782188560982],
['20030822',188.497721,121.335531470358],
['20030825',188.2391862,121.157612953774],
['20030826',188.8079628,120.95521023766],
['20030827',190.6435599,121.542831026378],
['20030828',191.1606295,121.848067380517],
['20030829',191.781113,121.327370070515],
['20030902',191.1864829,121.118438234526],
['20030903',190.7211203,121.632606424654],
['20030904',191.677699,122.789892922434],
['20030905',191.9620873,123.478715069209],
['20030908',194.4957283,122.23491773309],
['20030909',190.5659994,121.250652911988],
['20030910',188.0065049,120.173348132672],
['20030911',189.9972229,121.278401671455],
['20030912',191.3416038,120.942151997911],
['20030915',191.9620873,121.280033951424],
['20030916',195.1679188,121.075998955341],
['20030917',198.0635086,121.931313658919],
['20030918',198.735699,121.348589710107],
['20030919',199.5371569,121.469378427788],
['20030922',199.0200873,120.521023765997],
['20030923',201.1659261,120.338208409507],
['20030924',206.6468638,121.603225385218],
['20030925',208.9219701,121.224536432489],
['20030926',206.6727173,121.151083833899],
['20030929',203.2342045,120.161922172891],
['20030930',201.8122631,119.719574301384],
['20031001',205.6902851,120.403499608253],
['20031002',205.9488199,120.369221728911],
['20031003',207.7068565,120.82136328023],
['20031006',208.5083144,121.234330112301],
['20031007',210.3697649,122.184317054061],
['20031008',213.8599847,123.991250979368],
['20031009',217.4536184,127.221533037347],
['20031010',217.4536184,128.986027683468],
['20031013',217.4019114,129.234134238705],
['20031014',216.7814279,127.747127187255],
['20031015',216.8331349,127.841799425438],
['20031016',217.272644,127.990336902586],
['20031017',217.7121532,127.489226952207],
['20031020',217.5311788,127.554518150953],
['20031021',217.6604462,129.000718203186],
['20031022',220.1165268,131.416492556804],
['20031023',219.211655,131.305497518935],
['20031027',220.4784755,131.156960041787],
['20031028',222.0813913,131.503003395143],
['20031029',221.1248125,132.209780621572],
['20031030',221.9779773,132.557456254897],
['20031031',222.2365121,133.376860799164],
['20031103',221.8745634,132.719051971794],
['20031104',223.8652814,133.192413162706],
['20031105',225.675025,132.784343170541],
['20031106',224.1238162,132.074301384174],
['20031107',223.9686953,131.68908331157],
['20031110',222.3140726,130.73909636981],
['20031111',221.4350543,129.81196134761],
['20031112',220.4784755,129.000718203186],
['20031113',221.6160286,129.193327239488],
['20031114',220.8662777,129.314115957169],
['20031117',217.918981,127.636132149386],
['20031118',216.9365488,127.672042308697],
['20031119',212.4121898,125.02448419953],
['20031120',212.257069,126.862431444241],
['20031121',214.0151056,128.047466701489],
['20031127',214.1702265,127.051775920606],
['20031128',215.7214352,127.200313397754],
['20031201',219.3409224,129.041525202403],
['20031202',219.0823876,130.223295899713],
['20031203',219.0306807,129.859297466702],
['20031204',217.6862997,128.97133716375],
['20031205',216.9624023,128.457168973622],
['20031208',215.97997,127.975646382868],
['20031209',215.9541166,128.700378688953],
['20031210',216.3419188,129.686275790024],
['20031211',214.7648565,129.537738312876],
['20031212',215.1526587,129.266779838078],
['20031215',213.9892521,128.625293810394],
['20031216',212.5414572,127.657351788979],
['20031217',209.9819627,126.52291721076]
<?php
  // $jsonurl = "https://spreadsheets.google.com/feeds/list/0An9EMa5Y6wiXdFdOZXdScTZsN0RWSVFZUXBDU2wzTkE/od6/public/values?alt=json";
  // $json = file_get_contents($jsonurl,0,null,null);
  // $json_output = json_decode($json, true);

  // $entry = $json_output['feed']['entry'];
  // $count = count($entry);
  // // $count = 1000;
  // echo "['x', 'Cats', 'Blanket 1'],\n";

  // for($i=0; $i<$count;$i++){
  //   echo "['".date('Ymd',strtotime($entry[$i]['gsx$date']['$t']))."', '".$entry[$i]['gsx$fund']['$t']."', '".$entry[$i]['gsx$benchmark']['$t']."']";
  //   if($i<$count-1){ echo ','."\n"; }
  // }
  // exit;
?>
  ]);


      
  // Create and draw the visualization.
  new google.visualization.LineChart(document.getElementById('<?= $chart_id ?>')).
      draw(data, {curveType: "function",
                  width: 500, height: 400,
                  vAxis: {maxValue: 10}}
          );
}

jQuery(document).ready(function($)    {  
  drawVisualization();
  // google.setOnLoadCallback(drawVisualization);
});
</script>