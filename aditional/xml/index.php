<?php

/*$dom = new DOMDocument('1.0');

$books = $dom->appendChild($dom->createElement('books'));

$book = $books->appendChild($dom->createElement('book'));

$title = $book->appendChild($dom->createElement('title'));

$title->appendChild($dom->createTextNode('Some title'));

$dom->formatOutput = true;

$test1 = $dom->saveXML();

echo "<plaintext>" . $test1;

$dom->save('test.xml');*/

/*$sxe = simplexml_load_string('<books><book><title>some title</title></book></books>');
if ( $sxe === false) {
    echo 'error';
    exit;
} else {
    $dom_sxe = dom_import_simplexml($sxe);
}

if(!$dom_sxe){
    echo 'error';
    exit;
}

$dom = new DOMDocument('1.0');
$dom_sxe = $dom->importNode($dom_sxe, true);
$dom_sxe = $dom->appendChild($dom_sxe);

echo $dom->save('test2.xml');*/

/*$dom = new DOMDocument('1.0');

$dom->loadXML('<books><book><title>Some title</title></book></books>');

if(!$dom) {
    echo 'error';
    exit;
}

$s = simplexml_import_dom($dom);
echo $s->book[0]->title;*/

$languages = simplexml_load_file('data.xml');

foreach($languages->language as $value){
    echo "<h2> Название: " . $value['name'] . "</h2>" . "<p> Появился: " . $value->appeared . "</p>". "<p> Создатель: ". $value->creator . "</p>";
}
