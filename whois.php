 <?php

/**
 * Array below contains list of tlds and related whois servers.
 * Example:
 * array element:
 * '.co' => Array
 (
 'server' => 'whois.nic.co',
 'available' => 'Not found:'
 )
 * Informs HostBill core that:
 * 1. if domain to lookup have .co extension than:
 *  - connect with whois.nic.co over port 43
 *  - provide domain to lookup
 *  - check response, if it will contain string "Not found:"
 * (as described in 'available' section) it means that domain is available
 * for registration
 *
 * 2. If 'server' part begin with http:// HostBill will perform lookup using
 * port 80 (http request)
 */
$servers = array(
    '.ao' => Array(
        'server' => 'fred.nic.ao',
        'available' => 'No entries found'
    ),
    '.af' => array(
        'server' => 'whois.coccaregistry.org',
        'available' => 'Available'
    ),
    '.th' => array(
        'server' => 'whois.thnic.co.th',
        'available' => 'No match for'
    ),
    '.id' => array(
        'server' => 'whois.idnic.net.id',
        'available' => 'Not found'
    ),
    '.cat' => Array(
        'server' => 'whois.cat',
        'available' => 'NOT FOUND'
    ),
    '.ac' => Array(
        'server' => 'http://www.nic.ac/cgi-bin/whois?query=',
        'available' => 'This Domain is'
    ),
    '.ae' => Array(
        'server' => 'whois.aeda.net.ae',
        'available' => 'No Data Found'
    ),
    '.aero' => Array(
        'server' => 'whois.aero',
        'available' => 'NOT FOUND'
    ),
    '.ng' => Array(
        'server' => 'whois.nic.net.ng',
        'available' => 'Available'
    ),
    '.am' => Array(
        'server' => 'whois.amnic.net',
        'available' => 'No match'
    ),
    '.at' => Array(
        'server' => 'whois.nic.at',
        'available' => 'nothing found'
    ),
    '.priv.at' => Array(
        'server' => 'whois.nic.priv.at',
        'available' => 'No entries found for the selected source(s).'
    ),
    '.arpa' => Array(
        'server' => 'whois.iana.org',
        'available' => 'not found'
    ),
    '.as' => Array(
        'server' => 'http://www.nic.as/whois.cfm?domain=',
        'available' => 'Domain not found'
    ),
    '.asia' => Array(
        'server' => 'whois.nic.asia',
        'available' => 'NOT FOUND'
    ),
    '.au' => Array(
        'server' => 'whois-check.ausregistry.net.au',
        'available' => 'Available',
        'strict' => true
    ),
    '.be' => Array(
        'server' => 'whois.dns.be',
        'available' => "Status:\tAVAILABLE"
    ),
    '.bg' => Array(
        'server' => 'whois.register.bg',
        'available' => 'does not exist'
    ),
    '.br' => Array(
        'server' => 'whois.registro.br',
        'available' => 'No match for domain'
    ),
    '.bs' => array(
        'server' => 'http://register.bs/cgi-bin/search.pl?name=',
        'available' => 'has not yet been Registered'
    ),
    '.bw' => array(
        'server' => 'http://secure.coccaregistry.net/modules/addons/eppregistrarmanager/domaincheck.php?domain=',
        'available' => 'Not Registered'
    ),
    '.biz' => Array(
        'server' => 'whois.neulevel.biz',
        'available' => 'Not found:'
    ),
    '.ca' => Array(
        'server' => 'whois.cira.ca',
        'available' => 'status:         available'
    ),
    '.ch' => Array(
        'server' => 'whois.nic.ch',
        'available' => 'We do not have an entry'
    ),
    '.ci' => Array(
        'server' => 'whois.nic.ci',
        'available' => 'not found'
    ),
    '.cl' => Array(
        'server' => 'whois.nic.cl',
        'available' => 'no exist'
    ),
    '.cn' => Array(
        'server' => 'whois.cnnic.cn',
        'available' => 'no matching record'
    ),
    '.co' => Array(
        'server' => 'whois.nic.co',
        'available' => 'Not found:'
    ),
    '.cv' => Array(
        'server' => 'http://www.dns.cv/tldcv_si/do?com=DS;4186362310;online.200002;+PAGE(online.300110)+RCNT(100)+F_WHOIS(',
        'available' => 'Domain name not found / Nick-handle not found'
    ),
    '.com' => Array(
        'server' => 'whois.crsnic.net',
        'available' => 'No match for',
        'request' => 'domain '
    ),
    '.cc' => Array(
        'server' => 'whois.nic.cc',
        'available' => 'No match'
    ),
    '.cm' => Array(
        'server' => 'whois.netcom.cm',
        'available' => 'Not Registered'
    ),
    '.cx' => Array(
        'server' => 'whois.coccaregistry.org',
        'available' => 'Available'
    ),
    '.cz' => Array(
        'server' => 'whois.nic.cz',
        'available' => 'no entries found'
    ),
    '.co.cz' => Array(
        'server' => 'whois.i-registry.cz',
        'available' => 'no entries found'
    ),
    '.de' => Array(
        'server' => 'whois.denic.de',
        'available' => 'free'
    ),
    '.com.de' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'free'
    ),
    '.ae.org' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.ar.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.br.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.cn.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.de.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.eu.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.gb.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.gb.net' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.gr.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.hu.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.hu.net' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.jp.net' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.jpn.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.kr.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.no.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.qc.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.ru.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.sa.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.se.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.se.net' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.uk.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.uk.net' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.us.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.us.org' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.uy.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.za.com' => Array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.dk' => Array(
        'server' => 'whois.dk-hostmaster.dk',
        'available' => 'No entries found'
    ),
    '.dm' => Array(
        'server' => 'whois.nic.dm',
        'available' => 'not found...'
    ),
    '.my' => Array(
        'server' => 'whois.mynic.net.my',
        'available' => 'does not exist in database'
    ),
    '.do' => Array(
        'server' => 'http://www.nic.do/whoisingles.php3?dns_answer=&do=do&B1=Query&T1=',
        'available' => 'This domain doesn\'t exist',
        'sldonly' => true
    ),
    '.com.do' => Array(
        'server' => 'http://www.nic.do/whoisingles.php3?dns_answer=&do=com.do&B1=Query&T1=',
        'available' => 'This domain doesn\'t exist',
        'sldonly' => true
    ),
    '.art.do' => Array(
        'server' => 'http://www.nic.do/whoisingles.php3?dns_answer=&do=art.do&B1=Query&T1=',
        'available' => 'This domain doesn\'t exist',
        'sldonly' => true
    ),
    '.net.do' => Array(
        'server' => 'http://www.nic.do/whoisingles.php3?dns_answer=&do=net.do&B1=Query&T1=',
        'available' => 'This domain doesn\'t exist',
        'sldonly' => true
    ),
    '.gov.do' => Array(
        'server' => 'http://www.nic.do/whoisingles.php3?dns_answer=&do=gov.do&B1=Query&T1=',
        'available' => 'This domain doesn\'t exist',
        'sldonly' => true
    ),
    '.gob.do' => Array(
        'server' => 'http://www.nic.do/whoisingles.php3?dns_answer=&do=gob.do&B1=Query&T1=',
        'available' => 'This domain doesn\'t exist',
        'sldonly' => true
    ),
    '.org.do' => Array(
        'server' => 'http://www.nic.do/whoisingles.php3?dns_answer=&do=org.do&B1=Query&T1=',
        'available' => 'This domain doesn\'t exist',
        'sldonly' => true
    ),
    '.edu.do' => Array(
        'server' => 'http://www.nic.do/whoisingles.php3?dns_answer=&do=edu.do&B1=Query&T1=',
        'available' => 'This domain doesn\'t exist',
        'sldonly' => true
    ),
    '.sld.do' => Array(
        'server' => 'http://www.nic.do/whoisingles.php3?dns_answer=&do=sld.do&B1=Query&T1=',
        'available' => 'This domain doesn\'t exist',
        'sldonly' => true
    ),
    '.mil.do' => Array(
        'server' => 'http://www.nic.do/whoisingles.php3?dns_answer=&do=mil.do&B1=Query&T1=',
        'available' => 'This domain doesn\'t exist',
        'sldonly' => true
    ),
    '.web.do' => Array(
        'server' => 'http://www.nic.do/whoisingles.php3?dns_answer=&do=web.do&B1=Query&T1=',
        'available' => 'This domain doesn\'t exist',
        'sldonly' => true
    ),
    '.ec' => Array(
        'server' => 'whois.nic.ec',
        'available' => 'Not Registered'
    ),
    '.ee' => Array(
        'server' => 'whois.eenet.ee',
        'available' => 'No entries found'
    ),
    '.eu' => Array(
        'server' => 'whois.eu',
        'available' => 'Status:    AVAILABLE'
    ),
    '.edu' => Array(
        'server' => 'whois.internic.net',
        'available' => 'No match for'
    ),
    '.fi' => Array(
        'server' => 'whois.ficora.fi',
        'available' => 'Domain not found'
    ),
    '.fj' => Array(
        'server' => 'whois.usp.ac.fj',
        'available' => 'was not found'
    ),
    '.fr' => Array(
        'server' => 'whois.nic.fr',
        'available' => 'No entries found in the AFNIC Database'
    ),
    '.ga' => array(
        'server' => 'whois.dot.ga',
        'available' => 'domain name not known'
    ),
    '.gd' => Array(
        'server' => 'whois.nic.gd',
        'available' => 'not found...'
    ),
    '.gg' => Array(
        'server' => 'whois.channelisles.net',
        'available' => 'Not Registered'
    ),
    '.gi' => Array(
        'server' => 'whois2.afilias-grs.net',
        'available' => 'NOT FOUND'
    ),
    '.gs' => Array(
        'server' => 'whois.coccaregistry.org',
        'available' => 'Available'
    ),
    '.gt' => Array(
        'server' => 'http://www.gt/cgi-bin/whois.cgi?domain=',
        'available' => 'DOMINIO NO REGISTRADO'
    ),
    '.gy' => Array(
        'server' => 'whois.coccaregistry.org',
        'available' => 'Available'
    ),
    '.hk' => Array(
        'server' => 'whois.hkirc.hk',
        'available' => 'The domain has not been registered'
    ),
    '.hr' => Array(
        'server' => 'http://whois.com.hr/domena/',
        'available' => 'nije registrirana'
    ),
    '.hn' => Array(
        'server' => 'http://secure.coccaregistry.net/modules/addons/eppregistrarmanager/domaincheck.php?domain=',
        'available' => 'Not Registered'
    ),
    '.hu' => Array(
        'server' => 'whois.nic.hu',
        'available' => 'No match'
    ),
    '.ie' => Array(
        'server' => 'whois.domainregistry.ie',
        'available' => 'Not Registered'
    ),
    '.il' => Array(
        'server' => 'whois.isoc.org.il',
        'available' => 'No data was found'
    ),
    '.in' => Array(
        'server' => 'whois.inregistry.net',
        'available' => 'NOT FOUND'
    ),
    '.info' => Array(
        'server' => 'whois.afilias.net',
        'available' => 'NOT FOUND'
    ),
    '.io' => Array(
        'server' => 'http://www.nic.io/cgi-bin/whois?query=',
        'available' => 'This Domain is'
    ),
    '.ir' => Array(
        'server' => 'whois.nic.ir',
        'available' => 'no entries found'
    ),
    '.is' => Array(
        'server' => 'whois.isnic.is',
        'available' => 'No entries found'
    ),
    '.it' => Array(
        'server' => 'whois.nic.it',
        'available' => 'AVAILABLE'
    ),
    '.jp' => Array(
        'server' => 'whois.jprs.jp',
        'available' => 'No match!!'
    ),
    '.je' => Array(
        'server' => 'whois.channelisles.net',
        'available' => 'Not Registered'
    ),
    '.ke' => Array(
        'server' => 'whois.kenic.or.ke',
        'available' => 'Not Registered'
    ),
    '.ki' => Array(
        'server' => 'whois.nic.ki',
        'available' => 'Status: Available'
    ),
    '.kr' => Array(
        'server' => 'whois.nic.or.kr',
        'available' => 'not registered'
    ),
    '.kz' => Array(
        'server' => 'whois.nic.kz',
        'available' => 'Nothing found'
    ),
    '.la' => Array(
        'server' => 'whois.nic.la',
        'available' => 'NOT FOUND'
    ),
    '.link' => array(
        'server' => 'whois.uniregistry.net',
        'available' => 'is available for registration'
    ),
    '.lb' => Array(
        'server' => 'http://www.aub.edu.lb/cgi-bin/lbdr.pl?B1=Search&cn=',
        'available' => 'No matching entries in root domain'
    ),
    '.lt' => Array(
        'server' => 'whois.domreg.lt',
        'available' => "Status:            available"
    ),
    '.li' => Array(
        'server' => 'whois.nic.li',
        'available' => 'We do not have an entry'
    ),
    '.lk' => Array(
        'server' => 'whois.nic.lk',
        'available' => 'This Domain is not available in our whois database'
    ),
    '.ls' => Array(
        'server' => 'http://www.co.ls/co.asp?CT_DNS_NAME=',
        'available' => 'No records returned.'
    ),
    '.lu' => Array(
        'server' => 'whois.dns.lu',
        'available' => 'No such domain'
    ),
    '.lv' => Array(
        'server' => 'whois.nic.lv',
        'available' => 'Status: free'
    ),
    '.ly' => Array(
        'server' => 'whois.nic.ly',
        'available' => 'Not found'
    ),
    '.ma' => Array(
        'server' => 'whois.iam.net.ma',
        'available' => 'No Objects Found'
    ),
    '.me' => Array(
        'server' => 'whois.nic.me',
        'available' => 'NOT FOUND'
    ),
    '.mg' => array(
        'server' => 'whois.nic.mg',
        'available' => 'Available'
    ),
    '.ms' => Array(
        'server' => 'whois.nic.ms',
        'available' => 'Available'
    ),
    '.mx' => Array(
        'server' => 'whois.mx',
        'available' => 'Object_Not_Found'
    ),
    '.mobi' => Array(
        'server' => 'whois.dotmobiregistry.net',
        'available' => 'NOT FOUND'
    ),
    '.moe' => Array(
        'server' => 'whois.nic.moe',
        'available' => 'Not found'
    ),
    '.name' => Array(
        'server' => 'whois.nic.name',
        'available' => 'No match'
    ),
    '.na' => Array(
        'server' => 'whois.na-nic.com.na',
        'available' => 'Status: Not Registered'
    ),
    '.no' => Array(
        'server' => 'whois.norid.no',
        'available' => '% No match'
    ),
    '.co.no' => Array(
        'server' => 'whois.co.no',
        'available' => 'AVAILABLE'
    ),
    '.nu' => Array(
        'server' => 'whois.nic.nu',
        'available' => 'NO MATCH for domain'
    ),
    '.nl' => Array(
        'server' => 'whois.domain-registry.nl',
        'available' => 'is free'
    ),
    '.nz' => Array(
        'server' => 'whois.srs.net.nz',
        'available' => '220 Available'
    ),
    '.pa' => Array(
        'server' => 'http://www.nic.pa/whois.php?nombre_d=',
        'available' => 'El dominio'
    ),
    '.org' => Array(
        'server' => 'whois.publicinterestregistry.net',
        'available' => 'NOT FOUND'
    ),
    '.pe' => Array(
        'server' => 'kero.yachay.pe',
        'available' => 'Not Registered'
    ),
    '.pl' => Array(
        'server' => 'whois.dns.pl',
        'available' => 'No information available about domain'
    ),
    '.pm' => Array(
        'server' => 'whois.nic.pm',
        'available' => 'No entries found'
    ),
    '.pr' => Array(
        'server' => 'whois.nic.pr',
        'available' => 'available' // server was down temorary
    ),
    '.pro' => Array(
        'server' => 'whois.registry.pro',
        'available' => 'NOT FOUND'
    ),
    '.ru' => Array(
        'server' => 'whois.ripn.net',
        'available' => 'No entries found'
    ),
    '.ro' => Array(
        'server' => 'whois.rotld.ro',
        'available' => 'No entries found'
    ),
    '.rs' => Array(
        'server' => 'whois.rnids.rs',
        'available' => '%ERROR:103: Domain is not registered'
    ),
    '.re' => Array(
        'server' => 'whois.nic.re',
        'available' => 'No entries found'
    ),
    '.sa' => Array(
        'server' => 'whois.nic.net.sa',
        'available' => 'No match'
    ),
    '.se' => Array(
        'server' => 'whois.iis.se',
        'available' => 'not found.'
    ),
    '.sc' => Array(
        'server' => 'whois2.afilias-grs.net',
        'available' => 'NOT FOUND'
    ),
    '.sg' => Array(
        'server' => 'whois.nic.net.sg',
        'available' => 'Domain Not Found'
    ),
    '.sh' => Array(
        'server' => 'http://www.nic.sh/cgi-bin/whois?query=',
        'available' => 'This Domain is'
    ),
    '.si' => Array(
        'server' => 'whois.arnes.si',
        'available' => 'No entries found'
    ),
    '.st' => Array(
        'server' => 'whois.nic.st',
        'available' => 'No entries found'
    ),
    '.tel' => Array(
        'server' => 'whois.nic.tel',
        'available' => 'Not found:'
    ),
    '.tc' => Array(
        'server' => 'whois.adamsnames.tc',
        'available' => 'not registered'
    ),
    '.tf' => Array(
        'server' => 'whois.nic.tf',
        'available' => 'No entries found'
    ),
    '.tk' => Array(
        'server' => 'whois.dot.tk',
        'available' => 'domain name not known'
    ),
    '.tl' => Array(
        'server' => 'whois.coccaregistry.org',
        'available' => 'Available'
    ),
    '.tm' => Array(
        'server' => 'http://www.nic.tm/cgi-bin/whois?query=',
        'available' => 'This Domain is'
    ),
    '.tr' => Array(
        'server' => 'whois.nic.tr',
        'available' => 'No match found'
    ),
    '.tw' => Array(
        'server' => 'whois.twnic.net.tw',
        'available' => 'No Found'
    ),
    '.tz' => Array(
        'server' => 'whois.tznic.or.tz',
        'available' => 'ERROR:101: no entries found'
    ),
    '.tv' => Array(
        'server' => 'tvwhois.verisign-grs.com',
        'available' => 'No match for'
    ),
    '.travel' => Array(
        'server' => 'whois.nic.travel',
        'available' => 'Not found:'
    ),
    '.ua' => Array(
        'server' => 'whois.ua',
        'available' => '% No entries found'
    ),
    '.us' => Array(
        'server' => 'whois.nic.us',
        'available' => 'Not found:'
    ),
    '.uk' => Array(
        'server' => 'whois.nic.uk',
        'available' => 'No match for'
    ),
    '.ug' => Array(
        'server' => 'whois.co.ug',
        'available' => 'No entries found'
    ),
    '.uz' => Array(
        'server' => 'whois.cctld.uz',
        'available' => 'not found in database'
    ),
    '.vc' => Array(
        'server' => 'whois2.afilias-grs.net',
        'available' => 'NOT FOUND'
    ),
    '.ve' => Array(
        'server' => 'whois.nic.ve',
        'available' => 'No match for'
    ),
    '.vg' => Array(
        'server' => 'whois.adamsnames.tc',
        'available' => 'not registered'
    ),
    '.vu' => Array(
        'server' => 'http://www.vunic.vu/whois?',
        'available' => 'No match for domain'
    ),
    '.wf' => Array(
        'server' => 'whois.nic.wf',
        'available' => 'No entries found'
    ),
    '.ws' => Array(
        'server' => 'whois.worldsite.ws',
        'available' => 'No match for'
    ),
    '.yt' => Array(
        'server' => 'whois.nic.yt',
        'available' => 'No entries found'
    ),
    '.coop' => Array(
        'server' => 'whois.nic.coop',
        'available' => 'No domain records'
    ),
    '.jobs' => Array(
        'server' => 'jobswhois.verisign-grs.com',
        'available' => 'No match for'
    ),
    '.net' => Array(
        'server' => 'whois.verisign-grs.com',
        'available' => 'No match for'
    ),
    '.int' => Array(
        'server' => 'whois.iana.org',
        'available' => 'not found'
    ),
    '.museum' => Array(
        'server' => 'whois.museum',
        'available' => 'NOT FOUND'
    ),
    '.za' => Array(
        'server' => 'http://co.za/cgi-bin/whois.sh?Domain=',
        'available' => 'No Matches'
    ),
    '.ac.za' => array(
        'server' => 'http://whois.ac.za/cgi_domainquery.exe?domain=',
        'available' => 'is not registered'
    ),
    '.org.za' => array(
        'server' => 'http://www.org.za/cgi-bin/rwhois?domain=',
        'available' => 'Domain not found'
    ),
    '.zw' => array(
        'server' => 'http://www.zispa.org.zw/cgi-bin/search?domain=',
        'available' => 'is available for registration.'
    ),
    '.es' => Array(
        'server' => 'http://whois.domaintools.com/',
        'available' => 'This domain name is not registered'
    ),
    '.ph' => Array(
        'server' => 'http://www2.dot.ph/WhoIs.asp?Domain=',
        'available' => 'is still available'
    ),
    '.pk' => Array(
        'server' => 'http://pk6.pknic.net.pk/pk5/lookup.PK?name=',
        'available' => 'Domain not found:'
    ),
    '.pt' => Array(
        'server' => 'whois.dns.pt',
        'available' => 'no match'
    ),
    '.co.pt' => Array(
        'server' => 'whois.co.pt',
        'available' => 'no match'
    ),
    '.lta.pt' => Array(
       'server' => 'whois.co.pt',
       'available' => 'no match'
    ),
    '.so' => Array(
        'server' => 'whois.nic.so',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.ag' => array(
        'server' => 'whois.nic.ag',
        'available' => "NOT FOUND"
    ),
    '.ai' => array(
        'server' => 'http://whois.ai/cgi-bin/newdomain.py?domain=',
        'available' => 'not registered'
    ),
    '.fm' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.al' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.az' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.ba' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.bd' => array(
        'server' => 'http://www.whois.com.bd/?query=',
        'available' => "Domain you requested does not exist."
    ),
    '.bi' => array(
        'server' => 'whois1.nic.bi',
        'available' => 'Available'
        ),
    '.info.bi' => array(
        'server' => 'whois.nic.bi',
        'available' => 'No match for'
    ),
    '.bj' => array(
        'server' => 'whois.nic.bj',
        'available' => 'No records matching'
    ),
    '.bt' => array(
        'server' => 'whois.netnames.net',
        'available' => "No match for"
    ),
    '.by' => array(
        'server' => 'whois.cctld.by',
        'available' => 'Object does not exist'
    ),
    '.bz' => Array(
        'server' => 'whois.afilias-grs.info',
        'available' => 'NOT FOUND'
    ),
    '.cd' => array(
        'server' => '41.76.213.175',
        'available' => 'Available'
    ),
    '.cf' => array(
        'server' => 'whois.dot.cf',
        'available' => 'domain name not known'
    ),
    '.ck' => array(
        'server' => 'whois.nic.ck',
        'available' => "No entries found "
    ),
    '.co.nl' => array(
        'server' => 'whois.co.nl',
        'available' => 'AVAILABLE'
    ),
    '.cy' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.dz' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.eg' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.fo' => array(
        'server' => 'whois.nic.fo',
        'available' => "ERROR:101: no entries found"
    ),
    '.gb' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.ge' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.gl' => array(
        'server' => 'whois.ripe.net',
        'available' => " no entries found"
    ),
    '.gm' => array(
        'server' => 'http://www.nic.gm/scripts/checkdom.asp?dname=',
        'available' => 'is still available'
    ),
    '.gov' => array(
        'server' => 'whois.nic.gov',
        'available' => "No match for"
    ),
    '.gr' => array(
        'server' => 'http://grwhois.ics.forth.gr:800/plainwhois/plainWhois?domainName=',
        'available' => 'not exist'
    ),
    '.hm' => array(
        'server' => 'whois.registry.hm',
        'available' => "Domain not found."
    ),
    '.kg' => array(
        'server' => 'whois.domain.kg',
        'available' => "Data not found."
    ),
    '.mc' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.md' => array(
        'server' => 'whois.nic.md',
        'available' => "No match for"
    ),
    '.mk' => array(
        'server' => 'http://whois.marnet.mk/?domain=',
        'available' => '.mk '
    ),
    '.ml' => array(
        'server' => 'whois.dot.ml',
        'available' => 'domain name not known'
    ),
    '.mm' => Array(
        'server' => '61.4.68.21',
        'available' => 'Domain Not Found'
    ),
    '.mt' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.mu' => array(
        'server' => 'whois.nic.mu',
        'available' => 'Available'
    ),
    '.mw' => array(
        'server' => 'http://www.registrar.mw/index.php?d=0&Submit=Search&domain=',
        'available' => 'was NOT found'
    ),
    '.nf' => array(
        'server' => 'whois.coccaregistry.org',
        'available' => 'Available'
    ),
    '.sb' => array(
        'server' => 'whois.coccaregistry.org',
        'available' => 'Available'
    ),
    '.sk' => array(
        'server' => 'whois.sk-nic.sk',
        'available' => "Not found."
    ),
    '.sm' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.sn' => Array(
        'server' => 'http://whois.nic.sn/whois.php?domain=',
        'available' => 'Ce domaine n\'existe pas'
    ),
    '.su' => array(
        'server' => 'whois.tcinet.ru',
        'available' => 'No entries found'
    ),
    '.sx' => array(
        'server' => 'whois.sx',
        'available' => 'AVAILABLE'
    ),
    '.tn' => array(
        'server' => 'whois.tn',
        'available' => 'not found'
    ),
    '.to' => array(
        'server' => 'http://www.tonic.to/whois?',
        'available' => 'No match for domain'
    ),
    '.uy' => array(
        'server' => 'nic.uy',
        'available' => "No match for"
    ),
    '.va' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.xxx' => array(
        'server' => 'whois.nic.xxx',
        'available' => "NOT FOUND"
    ),
    '.xyz' => array(
        'server' => 'whois.nic.xyz',
        'available' => "DOMAIN NOT FOUND"
    ),
    '.yu' => array(
        'server' => 'whois.ripe.net',
        'available' => "no entries found"
    ),
    '.ht' => array(
        'server' => 'whois.coccaregistry.org',
        'available' => 'Available'
    ),
    '.info.ht' => array(
        'server' => 'whois.coccaregistry.org',
        'available' => 'Available'
    ),
    '.net.ht' => array(
        'server' => 'whois.coccaregistry.org',
        'available' => 'Available'
    ),
    '.org.ht' => array(
        'server' => 'whois.coccaregistry.org',
        'available' => 'Available'
    ),
    '.qa' => Array(
        'server' => 'whois.registry.qa',
        'available' => 'No Data Found ' // server was down temorary
    ),
    '.lc' => Array(
        'server' => 'whois.afilias-grs.info',
        'available' => 'NOT FOUND'
    ),
    '.im' => Array(
        'server' => 'whois.nic.im',
        'available' => 'was not found'
    ),
    '.mn' => Array(
        'server' => 'whois.afilias-grs.info',
        'available' => 'NOT FOUND'
    ),
    '.ps' => array(
        'server' => 'http://www.pnina.ps/domains/whois/?d=',
        'available' => 'has not been registered.'
    ),
    '.pw' => array(
        'server' => 'whois.nic.pw',
        'available' => 'DOMAIN NOT FOUND',
    ),
    '.py' => Array(
        'server' => 'http://www.nic.py/cgi-nic/consultas/dquery?nombre_dominio=',
        'available' => 'No se encontraron datos para el dominio solicitado.'
    ),
    '.academy' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.actor' => array(
        'server' => 'whois.unitedtld.com',
        'available' => 'Domain not found'
    ),
    '.agency' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.audio' => array(
        'server' => 'whois.uniregistry.net',
        'available' => 'is available for'
    ),
    '.bar' => array(
        'server' => 'whois.nic.bar',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.bargains' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.berlin' => array(
        'server' => 'whois.nic.berlin',
        'available' => 'No match'
    ),
    '.best' => array(
        'server' => 'whois.nic.best',
        'available' => 'Not found'
    ),
    '.bid' => array(
        'server' => 'whois.nic.bid',
        'available' => 'Not found'
    ),
    '.bike' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.blue' => array(
        'server' => 'whois.afilias.net',
        'available' => 'NOT FOUND'
    ),
    '.boutique' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.build' => array(
        'server' => 'whois.nic.build',
        'available' => 'No Data Found'
    ),
    '.builders' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.buzz' => array(
        'server' => 'whois.nic.buzz',
        'available' => 'Not found'
    ),
    '.cab' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.camera' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.camp' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.cards' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.careers' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.catering' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.center' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.ceo' => array(
        'server' => 'whois.nic.ceo',
        'available' => 'Not found'
    ),
    '.cheap' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.christmas' => array(
        'server' => 'whois.uniregistry.net',
        'available' => 'is available for'
    ),
    '.cleaning' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.clothing' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.club' => array(
        'server' => 'whois.nic.club',
        'available' => 'Not found'
    ),
    '.codes' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.coffee' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.cologne' => array(
        'server' => 'whois-fe1.pdt.cologne.tango.knipp.de',
        'available' => 'no matching objects found'
    ),
    '.community' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.company' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.computer' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.construction' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.contractors' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.condos' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.cool' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.cruises' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.dance' => array(
        'server' => 'whois.unitedtld.com',
        'available' => 'Domain not found'
    ),
    '.dating' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.democrat' => array(
        'server' => 'whois.unitedtld.com',
        'available' => 'Domain not found'
    ),
    '.diamonds' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.directory' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.domains' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.education' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.email' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.enterprises' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.equipment' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.estate' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.events' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.expert' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.exposed' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.farm' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.fail' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),    
    '.fish' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.flights' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.florist' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.foundation' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.futbol' => array(
        'server' => 'whois.unitedtld.com',
        'available' => 'Domain not found'
    ),
    '.gallery' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.gift' => array(
        'server' => 'whois.uniregistry.net',
        'available' => 'is available for'
    ),
    '.glass' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.graphics' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.guitars' => array(
        'server' => 'whois.uniregistry.net',
        'available' => 'is available for'
    ),
    '.guru' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.holdings' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.holiday' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.host' => array(
        'server' => 'whois.nic.host',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.house' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.immobilien' => array(
        'server' => 'whois.unitedtld.com',
        'available' => 'Domain not found'
    ),
    '.industries' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.ink' => array(
        'server' => 'whois.centralnic.com',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.institute' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.international' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.jetzt' => array(
        'server' => 'whois.nic.jetzt',
        'available' => 'Not found'
    ),
    '.jobs' => array(
        'server' => 'jobswhois.verisign-grs.com',
        'available' => 'No match for'
    ),
    '.kaufen' => array(
        'server' => 'whois.unitedtld.com',
        'available' => 'Domain not found'
    ),
    '.kim' => array(
        'server' => 'whois.afilias.net',
        'available' => 'NOT FOUND'
    ),
    '.kitchen' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.kiwi' => array(
        'server' => 'whois.dot-kiwi.com',
        'available' => 'Not Registered'
    ),
    '.koeln' => array(
        'server' => 'whois-fe1.pdt.koeln.tango.knipp.de',
        'available' => 'no matching objects found'
    ),
    '.kred' => array(
        'server' => 'whois.nic.kred',
        'available' => 'Not found'
    ),
    '.land' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.life' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.lighting' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.limo' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.link' => array(
        'server' => 'whois.uniregistry.net',
        'available' => 'is available for'
    ),
    '.london' => array(
        'server' => 'whois-lon.mm-registry.com',
        'available' => 'Not Registered'
    ),
    '.luxury' => array(
        'server' => 'whois.nic.luxury',
        'available' => 'No Data Found'
    ),
    '.management' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.mango' => array(
        'server' => 'whois.mango.coreregistry.net',
        'available' => 'no matching objects found'
    ),
    '.marketing' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.media' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.menu' => array(
        'server' => 'whois.nic.menu',
        'available' => 'No Data Found'
    ),
    '.moda' => array(
        'server' => 'whois.unitedtld.com',
        'available' => 'Domain not found'
    ),
    '.monash' => array(
        'server' => 'whois.nic.monash',
        'available' => 'No Data Found'
    ),
    '.nagoya' => array(
        'server' => 'whois.gmoregistry.net',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.ninja' => array(
        'server' => 'whois.unitedtld.com',
        'available' => 'Domain not found'
    ),
    '.nyc' => array(
        'server' => 'whois.nic.nyc',
        'available' => 'Not found'
    ),
    '.okinawa' => array(
        'server' => 'whois.gmoregistry.ne',
        'available' => 'Domain not found'
    ),
    '.partners' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.parts' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.photo' => array(
        'server' => 'whois.uniregistry.net',
        'available' => 'is available for'
    ),
    '.photography' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.photos' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.pics' => array(
        'server' => 'whois.uniregistry.net',
        'available' => 'is available for'
    ),
    '.pink' => array(
        'server' => 'whois.afilias.net',
        'available' => 'NOT FOUND'
    ),
    '.plumbing' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.productions' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.properties' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.pub' => array(
        'server' => 'whois.unitedtld.com',
        'available' => 'Domain not found'
    ),
    '.qpon' => array(
        'server' => 'whois.nic.qpon',
        'available' => 'Not found'
    ),
    '.recipes' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.red' => array(
        'server' => 'whois.nic.red',
        'available' => 'NOT FOUND'
    ),
    '.rentals' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.repair' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.report' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.reviews' => array(
        'server' => 'whois.unitedtld.com',
        'available' => 'Domain not found'
    ),
    '.rich' => array(
        'server' => 'whois.afilias-srs.net',
        'available' => 'NOT FOUND'
    ),
    '.ruhr' => array(
        'server' => 'whois.nic.ruhr',
        'available' => 'no matching objects found'
    ),
    '.sexy' => array(
        'server' => 'whois.uniregistry.net',
        'available' => 'is available for'
    ),
    '.shiksha' => array(
        'server' => 'whois.nic.shiksha',
        'available' => 'NOT FOUND'
    ),
    '.shoes' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.singles' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.social' => array(
        'server' => 'whois.unitedtld.com',
        'available' => 'Domain not found'
    ),
    '.sohu' => array(
        'server' => 'whois.gtld.knet.cn',
        'available' => 'No match'
    ),
    '.solar' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.solutions' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.supplies' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.supply' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.support' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.systems' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.tattoo' => array(
        'server' => 'whois.uniregistry.net',
        'available' => 'is available for'
    ),
    '.technology' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.tienda' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.tips' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.today' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.tokyo' => array(
        'server' => 'whois.nic.tokyo',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.tools' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.trade' => array(
        'server' => 'whois.nic.trade',
        'available' => 'Not found'
    ),
    '.training' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.uno' => array(
        'server' => 'whois.nic.uno',
        'available' => 'Not found'
    ),
    '.vacations' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.ventures' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.viajes' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.villas' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.vision' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.vote' => array(
        'server' => 'whois.afilias.net',
        'available' => 'Domain not found'
    ),
    '.voting' => array(
        'server' => 'whois.nic.voting',
        'available' => 'No match'
    ),
    '.voto' => array(
        'server' => 'whois.afilias.net',
        'available' => 'Domain not found'
    ),
    '.voyage' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.wang' => array(
        'server' => 'whois.gtld.knet.cn',
        'available' => 'Domain not found'
    ),
    '.watch' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.webcam' => array(
        'server' => 'whois.nic.webcam',
        'available' => 'Domain not found'
    ),
    '.wed' => array(
        'server' => 'whois.nic.wed',
        'available' => 'No Object Found'
    ),
    '.wien' => array(
        'server' => 'whois.nic.wien',
        'available' => 'No match'
    ),
    '.wiki' => array(
        'server' => 'whois.nic.wiki',
        'available' => 'DOMAIN NOT FOUND'
    ),
    '.works' => array(
        'server' => 'whois.donuts.co',
        'available' => 'Domain not found'
    ),
    '.wtf' => array(
        'server' => 'whois.nic.wtf',
        'available' => 'Domain not found'
    ),
    '.zone' => array(
        'server' => 'whois.nic.zone',
        'available' => 'Domain not found'
    )
    //info.ht, net.ht, and .org.ht.
); 
