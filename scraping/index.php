<?
// example of how to use advanced selector features
require 'simple_html_dom.php';


/*function scraping_digg() {
    
    $url = "https://yespornplease.com";
	$html = file_get_html( $url );

    // get news block
    foreach($html->find('div.col-sm-4.col-md-4.col-lg-3') as $article) {
        // get title
        $item['title'] = trim($article->find('h3', 0)->plaintext);
        // get details
        $item['details'] = trim($article->find('p', 0)->plaintext);
        // get intro
        $item['diggs'] = trim($article->find('li a strong', 0)->plaintext);

        $ret[] = $item;
    }
    
    // clean up memory
    $html->clear();
    unset($html);

    return $ret;
}*/

$html = file_get_html( "https://yespornplease.com/" );

echo '<pre>';
print_r( $html );
echo '</pre>';

/*ini_set('user_agent', 'My-Application/2.5');

$ret = scraping_digg();

foreach($ret as $v) {
    echo $v['title'].'<br>';
    echo '<ul>';
    echo '<li>'.$v['details'].'</li>';
    echo '<li>Diggs: '.$v['diggs'].'</li>';
    echo '</ul>';
}

/*$data = file_get_contents( $url );

$expresion = 'class="col-sm-4 col-md-4 col-lg-3"';

$data =  htmlentities( $data );

$view = explode( 'href="/view/', $data );

echo '<pre>';
print_r( $view );
echo '</pre>';

#echo preg_match( $expresion, $data ); // Devuelve 1

//echo htmlentities( $data );

/*foreach ($data as $value) {
	//print_r( $value );
}*/
?>