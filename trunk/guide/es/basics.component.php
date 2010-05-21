Componente
==========

Las aplicaciones Yii se basan en componentes que son objetos escrito a una 
especificación. Un componente es una instancia de CComponent o su clase 
derivada. El uso de un componente se centra principalmente en el acceso a 
sus propiedades y raising/handling de sus eventos. El CComponent clase base 
especifica cómo definir propiedades y eventos.


Componente de Propiedad
------------------------

Un Componente de Propiedad es como un objeto variable de miembro pública. 
Podemos leer su valor o asignar un valor a la misma. Por ejemplo,

~~~
[php]
$width=$component->textWidth;     // recupera la propiedad textWidth
$component->enableCaching=true;   // define la propiedad enableCaching
~~~

Para definir un componente de propiedad, simplemente se puede declarar una 
variable de miembro pública en la clase del componente. Una forma más 
flexible, sin embargo, es mediante la definición de los métodos getter y 
setter como se muestra:


~~~
[php]
public function getTextWidth()
{
    return $this->_textWidth;
}

public function setTextWidth($value)
{
    $this->_textWidth=$value;
}
~~~

El código anterior define una propiedad de escritura denominada textwidth 
(el nombre no distingue entre mayúsculas y minúsculas). Al leer la 
propiedad, getTextWidth () se invoca y su valor devuelto se convierte en el 
valor de la propiedad; Del mismo modo, al escribir la propiedad, 
setTextWidth () se invoca. Si el método "setter" no está definido, la 
propiedad sería de sólo lectura y la escritura sería una excepción. Uso de 
métodos getter y setter para definir una propiedad tiene el beneficio 
adicional de que la lógica (por ejemplo, realizar la validación, eventos de 
recaudación) se pueden ejecutar cuando esta escribiendo y leyendo la 
propiedad.



>Attention: Hay una pequeña diferencia entre una propiedad definida a través de 
métodos getter / setter y una variable miembro de clase. El nombre de la 
primera no distingue entre mayúsculas y minúsculas mientras que el segundo 
es sensible a mayúsculas y minúsculas.

Eventos de Componente
---------------------

Los eventos de componente son propiedades especiales que tienen los métodos 
(llamados controladores de eventos "event handlers") como sus valores. 
Adjutando (asignar) un método para un evento hará que el método que se 
invoca de forma automática en los lugares donde el evento es "raised". Por 
lo tanto, el comportamiento de un componente puede ser modificado de una 
manera que no pueda ser prevista durante el desarrollo del componente.

Un evento de componente se define mediante la definición de un método cuyo 
nombre empieza con "on". Al igual que los nombres de propiedad se definen a 
través de los métodos getter / setter , los nombres de evento no distingue 
entre mayúsculas y minúsculas. El código siguiente define un evento 
onClicked:

~~~
[php]
public function onClicked($event)
{
	$this->raiseEvent('onClicked', $event);
}
~~~

donde $event es una instancia de CEvent o su clase heredada que representa 
el parámetro de evento.

Podemos adjuntar un método para este evento de la siguiente manera:

~~~
[php]
$component->onClicked=$callback;
~~~

donde $callback refiere a una devolución de llamada de PHP. Puede ser una 
función global o un método de clase. En este último caso, la devolución de 
llamada debe ser dada como un arreglo: array($object,'methodName').

La firma de un controlador de eventos debe ser como sigue:

~~~
[php]
function methodName($event)
{
    ......
}
~~~

donde $event es el parámetro que describe el evento, (se origina en la 
llamada RaiseEvent ()). El parametro $event es una instancia de CEvent o su 
clase derivada. Como mínimo, contiene la información acerca de quién 
provoca (raises) el evento.

Desde la versión 1.0.10, un controlador de eventos puede ser también una 
función anónima que recibe apoyo de PHP 5.3 o superior. Por ejemplo,

~~~
[php]
$component->onClicked=function($event) {
	......
}
~~~


Si llamamos onClicked () ahora, el evento onClicked se incrementará (en el 
interior onClicked ()), y el controlador de eventos asociados se invoca 
automáticamente.

Un evento puede ser asociado con controladores múltiples. Cuando el evento 
se produce, los controladores se invocarán en el orden en que estan unidos 
al evento. Si un controlador decide evitar que el resto de los 
controladores sean invocados, se puede establecer evento $event->handled 
para ser verdadero.




Comportamiento del Componente
-----------------------------

A partir de la versión 1.0.2, un componente ha añadido soporte para mixin y 
pueden ser adjuntado con uno o varios comportamientos. Un comportamiento es 
un objeto cuyos métodos pueden ser "heredados" por su componente adjuntos a 
través del significado de coleccionar funcionalidad en vez de 
especialización (es decir, la herencia de clases normal). Un componente 
puede ser adjuntado con varios comportamientos y así lograr la "herencia 
múltiple".

Las clases de comportamiento debe implementar la interfaz IBehavior. La 
mayoría de los comportamientos pueden extenderse de la clase base 
CBehavior. Si un comportamiento necesita adjuntarse a un modelo, también 
puede extenderse desde CModelBehavior o CActiveRecordBehavior que ejecuta 
funciones adicionales especificas para modelos.

Para utilizar un comportamiento, tiene que ser adjuntado a un componente 
primero llamando al método de comportamiento attach (). Entonces podemos 
llamar a un comportamiento de método a través del componente:

~~~
[php]
// $name identifie de façon unique le comportement du composant
$behavior->attach($name,$component);
// test() est une méthode de $behavior
$component->test();
~~~

Un comportamiento adjunto puede ser accesado como una propiedad normal de 
los componentes. Por ejemplo, si un comportamiento llamado tree está 
adjunto a un componente, podemos obtener la referencia a este objeto de 
comportamiento mediante:

~~~
[php]
$behavior=$component->tree;
// équivalent de la syntaxe
// $behavior=$component->asa('tree');
~~~

Un comportamiento puede ser inhabilitado temporalmente para que sus métodos 
no estén disponibles en el componente. Por ejemplo,


~~~
[php]
$component->disableBehavior($name);
// la ligne suivante va lever une exception
$component->test();
$component->enableBehavior($name);
// elle fonctionne désormais
$component->test();
~~~

Es posible que dos comportamientos adjuntos al mismo componente tengan 
métodos del mismo nombre. En este caso, el método del primer comprotamiento 
adjunto tendrá prioridad.

Cuando se utilizan juntos con eventos, los comportamientos son aún más 
poderosos. Un comportamiento, al estar conectado a un componente, puede 
adjuntar algunos de sus métodos para algunos eventos del componente. De 
esta manera, el comportamiento tiene la oportunidad de observar o cambiar 
el flujo de ejecución normal del componente.

A partir de la versión 1.1.0, las propiedades de un comportamiento también 
se puede acceder a través del componente al que está adjuto. Las 
propiedades incluyen tanto las variables miembro públicas y las propiedades 
definidas a través de getters y / o setters de comportamiento. Por ejemplo, 
si un comportamiento tiene una propiedad denominada xyz y el comportamiento 
está conectado a un componente $a. Entonces podemos utilizar la expresión 
$a-> xyz para acceder a la propiedad el comportamiento.

<div class="revision">$Id$</div>