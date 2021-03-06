<?php


$currentversion = 2.2;

// Max paste size in MB. This value should always be below the value of
// post_max_size in your PHP configuration settings (php.ini) or empty errors will occur.
// The value we got on installation of Paste was: post_max_size = 40M
// Otherwise, the maximum value that can be set is 4000 (4GB)

$pastelimit = "0.5"; // 0.5 = 512 kilobytes, 1 = 1MB

// Default time zone
$set_default_time_zone = 'Asia/Almaty';

// OAUTH (to enable, change to yes and edit)
$enablefb = "yes";
$enablegoog = "yes";

// Global site tag (gtag.js) - Google Analytics -->
$gtag = "G-F0B6Q7X2J6";

// "CHANGE THIS" = Replace with your details
// Facebook
define('FB_APP_ID', '267006777937617'); // Your application ID, see https://developers.facebook.com/docs/apps/register
define('FB_APP_SECRET', '9a78aeb1838cff30b39b10bda9aa0f15');    // What's your Secret key

// Google 
define('G_Client_ID', '384219528796-fjoaagacmqc0rkjc7fo40onbnu0f18ua.apps.googleusercontent.com'); // Get a Client ID from https://console.developers.google.com/projectselector/apis/library
define('G_Client_Secret', 's0tNV36vFvU0bl_AbeBJ_Xmt'); // What's your Secret key
define('G_Redirect_Uri', 'https://wspaste.com/oauth/google.php'); // Leave this as is
define('G_Application_Name', 'wspaste'); // Make sure this matches the name of your application

// Database information
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "wspaste";

// Secret key for paste encryption
$sec_key  = "9a78aeb1838cff30b39b10bda9aa0f15";
define('SECRET', md5($sec_key));

// Set to 1 to enable Apache's mod_rewrite
$mod_rewrite = "1";

// Popular formats that are listed first.
$popular_formats = array(
    'text',
    'markdown',
    'html5',
    'css',
    'javascript',
    'php',
    'python',
    'sql',
    'java',
    'c',
    'csharp',
    'cpp',
);

// Available GeSHi formats
$geshiformats = array(
    '4cs' => 'GADV 4CS',
    '6502acme' => 'ACME Cross Assembler',
    '6502kickass' => 'Kick Assembler',
    '6502tasm' => 'TASM/64TASS 1.46',
    '68000devpac' => 'HiSoft Devpac ST 2',
    'abap' => 'ABAP',
    'actionscript' => 'ActionScript',
    'actionscript3' => 'ActionScript 3',
    'ada' => 'Ada',
    'aimms' => 'AIMMS3',
    'algol68' => 'ALGOL 68',
    'apache' => 'Apache',
    'applescript' => 'AppleScript',
    'arm' => 'ARM Assembler',
    'asm' => 'ASM',
    'asp' => 'ASP',
    'asymptote' => 'Asymptote',
    'autoconf' => 'Autoconf',
    'autohotkey' => 'Autohotkey',
    'autoit' => 'AutoIt',
    'avisynth' => 'AviSynth',
    'awk' => 'Awk',
    'bascomavr' => 'BASCOM AVR',
    'bash' => 'BASH',
    'basic4gl' => 'Basic4GL',
    'bf' => 'Brainfuck',
    'bibtex' => 'BibTeX',
    'blitzbasic' => 'BlitzBasic',
    'bnf' => 'BNF',
    'boo' => 'Boo',
    'c' => 'C',
    'c_loadrunner' => 'C (LoadRunner)',
    'c_mac' => 'C for Macs',
    'c_winapi' => 'C (WinAPI)',
    'caddcl' => 'CAD DCL',
    'cadlisp' => 'CAD Lisp',
    'cfdg' => 'CFDG',
    'cfm' => 'ColdFusion',
    'chaiscript' => 'ChaiScript',
    'chapel' => 'Chapel',
    'cil' => 'CIL',
    'clojure' => 'Clojure',
    'cmake' => 'CMake',
    'cobol' => 'COBOL',
    'coffeescript' => 'CoffeeScript',
    'cpp' => 'C++',
    'cpp-qt' => 'C++ (with QT extensions)',
    'cpp-winapi' => 'C++ (WinAPI)',
    'csharp' => 'C#',
    'css' => 'CSS',
    'cuesheet' => 'Cuesheet',
    'd' => 'D',
    'dcl' => 'DCL',
    'dcpu16' => 'DCPU-16 Assembly',
    'dcs' => 'DCS',
    'delphi' => 'Delphi',
    'diff' => 'Diff-output',
    'div' => 'DIV',
    'dos' => 'DOS',
    'dot' => 'dot',
    'e' => 'E',
    'ecmascript' => 'ECMAScript',
    'eiffel' => 'Eiffel',
    'email' => 'eMail (mbox)',
    'epc' => 'EPC',
    'erlang' => 'Erlang',
    'euphoria' => 'Euphoria',
    'ezt' => 'EZT',
    'f1' => 'Formula One',
    'falcon' => 'Falcon',
    'fo' => 'FO (abas-ERP)',
    'fortran' => 'Fortran',
    'freebasic' => 'FreeBasic',
    'fsharp' => 'F#',
    'gambas' => 'GAMBAS',
    'gdb' => 'GDB',
    'genero' => 'Genero',
    'genie' => 'Genie',
    'gettext' => 'GNU Gettext',
    'glsl' => 'glSlang',
    'gml' => 'GML',
    'gnuplot' => 'GNUPlot',
    'go' => 'Go',
    'groovy' => 'Groovy',
    'gwbasic' => 'GwBasic',
    'haskell' => 'Haskell',
    'haxe' => 'Haxe',
    'hicest' => 'HicEst',
    'hq9plus' => 'HQ9+',
    'html4strict' => 'HTML 4.01',
    'html5' => 'HTML 5',
    'icon' => 'Icon',
    'idl' => 'Uno Idl',
    'ini' => 'INI',
    'inno' => 'Inno Script',
    'intercal' => 'INTERCAL',
    'io' => 'IO',
    'ispfpanel' => 'ISPF Panel',
    'j' => 'J',
    'java' => 'Java',
    'java5' => 'Java 5',
    'javascript' => 'JavaScript',
    'jcl' => 'JCL',
    'jquery' => 'jQuery',
    'kixtart' => 'KiXtart',
    'klonec' => 'KLone C',
    'klonecpp' => 'KLone C++',
    'latex' => 'LaTeX',
    'lb' => 'Liberty BASIC',
    'ldif' => 'LDIF',
    'lisp' => 'Lisp',
    'llvm' => 'LLVM',
    'locobasic' => 'Locomotive Basic',
    'logtalk' => 'Logtalk',
    'lolcode' => 'LOLcode',
    'lotusformulas' => 'Lotus Notes @Formulas',
    'lotusscript' => 'LotusScript',
    'lscript' => 'Lightwave Script',
    'lsl2' => 'Linden Script',
    'lua' => 'LUA',
    'm68k' => 'Motorola 68000 Assembler',
    'magiksf' => 'MagikSF',
    'make' => 'GNU make',
    'mapbasic' => 'MapBasic',
    'markdown' => 'Markdown',
    'matlab' => 'Matlab M',
    'mirc' => 'mIRC Scripting',
    'mmix' => 'MMIX',
    'modula2' => 'Modula-2',
    'modula3' => 'Modula-3',
    'mpasm' => 'Microchip Assembler',
    'mxml' => 'MXML',
    'mysql' => 'MySQL',
    'nagios' => 'Nagios',
    'netrexx' => 'NetRexx',
    'newlisp' => 'NewLisp',
    'nginx' => 'Nginx',
    'nsis' => 'NSIS',
    'oberon2' => 'Oberon-2',
    'objc' => 'Objective-C',
    'objeck' => 'Objeck',
    'ocaml' => 'Ocaml',
    'ocaml-brief' => 'OCaml (Brief)',
    'octave' => 'GNU/Octave',
    'oobas' => 'OpenOffice.org Basic',
    'oorexx' => 'ooRexx',
    'oracle11' => 'Oracle 11 SQL',
    'oracle8' => 'Oracle 8 SQL',
    'oxygene' => 'Oxygene (Delphi Prism)',
    'oz' => 'OZ',
    'parasail' => 'ParaSail',
    'parigp' => 'PARI/GP',
    'pascal' => 'Pascal',
    'pcre' => 'PCRE',
    'per' => 'Per (forms)',
    'perl' => 'Perl',
    'perl6' => 'Perl 6',
    'pf' => 'OpenBSD Packet Filter',
    'php' => 'PHP',
    'php-brief' => 'PHP (Brief)',
    'pic16' => 'PIC16 Assembler',
    'pike' => 'Pike',
    'pixelbender' => 'Pixel Bender',
    'pli' => 'PL/I',
    'plsql' => 'PL/SQL',
    'postgresql' => 'PostgreSQL',
    'povray' => 'POVRAY',
    'powerbuilder' => 'PowerBuilder',
    'powershell' => 'PowerShell',
    'proftpd' => 'ProFTPd config',
    'progress' => 'Progress',
    'prolog' => 'Prolog',
    'properties' => 'Properties',
    'providex' => 'ProvideX',
    'purebasic' => 'PureBasic',
    'pycon' => 'Python (console mode)',
    'pys60' => 'Python for S60',
    'python' => 'Python',
    'qbasic' => 'QuickBASIC',
    'racket' => 'Racket',
    'rails' => 'Ruby on Rails',
    'rbs' => 'RBScript',
    'rebol' => 'REBOL',
    'reg' => 'Microsoft REGEDIT',
    'rexx' => 'Rexx',
    'robots' => 'robots.txt',
    'rpmspec' => 'RPM Specification File',
    'rsplus' => 'R / S+',
    'ruby' => 'Ruby',
    'sas' => 'SAS',
    'scala' => 'Scala',
    'scheme' => 'Scheme',
    'scilab' => 'SciLab',
    'scl' => 'SCL',
    'sdlbasic' => 'sdlBasic',
    'smalltalk' => 'Smalltalk',
    'smarty' => 'Smarty',
    'spark' => 'SPARK',
    'sparql' => 'SPARQL',
    'sql' => 'SQL',
    'stonescript' => 'StoneScript',
    'systemverilog' => 'SystemVerilog',
    'tcl' => 'TCL',
    'teraterm' => 'Tera Term Macro',
    'text' => 'Plain Text',
    'thinbasic' => 'thinBasic',
    'tsql' => 'T-SQL',
    'typoscript' => 'TypoScript',
    'unicon' => 'Unicon',
    'upc' => 'UPC',
    'urbi' => 'Urbi',
    'unrealscript' => 'Unreal Script',
    'vala' => 'Vala',
    'vb' => 'Visual Basic',
    'vbnet' => 'VB.NET',
    'vbscript' => 'VB Script',
    'vedit' => 'Vedit Macro',
    'verilog' => 'Verilog',
    'vhdl' => 'VHDL',
    'vim' => 'Vim',
    'visualfoxpro' => 'Visual FoxPro',
    'visualprolog' => 'Visual Prolog',
    'whitespace' => 'Whitespace',
    'whois' => 'WHOIS (RPSL format)',
    'winbatch' => 'WinBatch',
    'xbasic' => 'XBasic',
    'xml' => 'XML',
    'xorg_conf' => 'Xorg Config',
    'xpp' => 'X++',
    'yaml' => 'YAML',
    'z80' => 'ZiLOG Z80 Assembler',
    'zxbasic' => 'ZXBasic'
);
