<?php
require __DIR__ . '/vendor/autoload.php';
use function Jawira\PlantUml\encodep;

// puml 파일을 호출한다
$resource_file = file('./beaver.puml');
ob_start();
foreach($resource_file as $line) {
    echo $line;
}
$puml_data = ob_get_contents();
ob_end_clean();

$encode = encodep($puml_data);
?>


<img src="http://www.plantuml.com/plantuml/png/<?php echo $encode;?>"><br>
<a href="http://www.plantuml.com/plantuml/uml/<?php echo $encode; ?>">생성된링크가기</a>