<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hy', array (
  'validators' => 
  array (
    'This value should be false.' => 'Արժեքը պետք է լինի սխալ։',
    'This value should be true.' => 'Արժեքը պետք է լինի ճիշտ։',
    'This value should be of type {{ type }}.' => 'Արժեքը պետք է լինի {{ type }} տեսակի։',
    'This value should be blank.' => 'Արժեքը պետք է լինի դատարկ։',
    'The value you selected is not a valid choice.' => 'Ձեր ընտրած արժեքը անվավեր ընտրություն է։',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Դուք պետք է ընտրեք ամենաքիչը {{ limit }} տարբերակներ։',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Դուք պետք է ընտրեք ոչ ավելի քան {{ limit }} տարբերակներ։',
    'One or more of the given values is invalid.' => 'Մեկ կամ ավելի տրված արժեքները անվավեր են։',
    'This field was not expected.' => 'Այս դաշտը չի սպասվում։',
    'This field is missing.' => 'Այս դաշտը բացակայում է։',
    'This value is not a valid date.' => 'Արժեքը սխալ ամսաթիվ է։',
    'This value is not a valid datetime.' => 'Ամսաթվի և ժամանակի արժեքը անվավեր է։',
    'This value is not a valid email address.' => 'Անվավեր էլ֊փոստի արժեք։',
    'The file could not be found.' => 'Նիշքը չի գտնվել։',
    'The file is not readable.' => 'Նիշքը անընթեռնելի է։',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Նիշքը չափազանց մեծ է ({{ size }} {{ suffix }}): Մաքսիմալ թույլատրելի չափսը՝ {{ limit }} {{ suffix }}։',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-տեսակը անվավեր է է({{ type }}): Նիշքերի թույլատրելի MIME-տեսակներն են: {{ types }}։',
    'This value should be {{ limit }} or less.' => 'Արժեքը պետք է լինի {{ limit }} կամ փոքր։',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Արժեքը չափազանց երկար է: Պետք է լինի {{ limit }} կամ ավել սիմվոլներ։',
    'This value should be {{ limit }} or more.' => 'Արժեքը պետ է լինի {{ limit }} կամ շատ։',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Արժեքը չափազանց կարճ է: Պետք է լինի {{ limit }} կամ ավելի սիմվոլներ։',
    'This value should not be blank.' => 'Արժեքը չպետք է դատարկ լինի։',
    'This value should not be null.' => 'Արժեքը չպետք է լինի null։',
    'This value should be null.' => 'Արժեքը պետք է լինի null։',
    'This value is not valid.' => 'Անվավեր արժեք։',
    'This value is not a valid time.' => 'Ժամանակի արժեքը անվավեր է։',
    'This value is not a valid URL.' => 'Արժեքը  URL  չէ։',
    'The two values should be equal.' => 'Երկու արժեքները պետք է նույնը լինեն։',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Նիշքը չափազանց մեծ է: Մաքսիմալ թույլատրելի չափսը {{ limit }} {{ suffix }} է։',
    'The file is too large.' => 'Նիշքը չափազանց մեծ է։',
    'The file could not be uploaded.' => 'Նիշքը չի կարող բեռնվել։',
    'This value should be a valid number.' => 'Արժեքը պետք է լինի թիվ։',
    'This value is not a valid country.' => 'Արժեքը պետք է լինի երկիր։',
    'This file is not a valid image.' => 'Նիշքը նկարի վավեր ֆորմատ չէ։',
    'This is not a valid IP address.' => 'Արժեքը վավեր IP հասցե չէ։',
    'This value is not a valid language.' => 'Արժեքը վավեր լեզու չէ։',
    'This value is not a valid locale.' => 'Արժեքը չի հանդիսանում վավեր տեղայնացում։',
    'This value is already used.' => 'Այդ արժեքն արդեն օգտագործվում է։',
    'The size of the image could not be detected.' => 'Նկարի չափսերը չստացվեց որոշել։',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Նկարի լայնությունը չափազանց մեծ է({{ width }}px). Մաքսիմալ չափն է {{ max_width }}px։',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Նկարի լայնությունը չափազանց փոքր է ({{ width }}px). Մինիմալ չափն է {{ min_ width }}px։',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Նկարի բարձրությունը չափազանց մեծ է ({{ height }}px). Մաքսիմալ չափն է {{ max_height }}px։',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Նկարի բարձրությունը չափազանց փոքր է ({{ height }}px). Մինիմալ չափն է {{ min_height }}px։',
    'This value should be the user\'s current password.' => 'Այս արժեքը պետք է լինի օգտագործողի ներկա ծածկագիրը։',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Այս արժեքը պետք է ունենա ճիշտ {{ limit }} սիմվոլներ։',
    'The file was only partially uploaded.' => 'Նիշքի մասնակի բեռնման սխալ։',
    'No file was uploaded.' => 'Նիշքը չի բեռնվել։',
    'No temporary folder was configured in php.ini.' => 'php.ini նիշքում ժամանակավոր պանակ նշված չէ։',
    'Cannot write temporary file to disk.' => 'Ժամանակավոր նիշքը հնարավոր չէ գրել սկավառակի վրա։',
    'A PHP extension caused the upload to fail.' => 'PHP ֆորմատը դարձել է բեռնման չհաջողման պատճառ։',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Այս հավաքածուն պետք է պաուրակի {{ limit }} կամ ավելի տարրեր։|Այս հավելվածը պետք է պարունակի limit }} տարր կամ ավելին։|Այս հավաքածուն պետք է պարունակի {{ limit }} տարրերին կամ ավելի։',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Այս հավաքածուն պետք է պաուրակի {{ limit }} տարրեր կամ քիչ։|Այս հավաքածուն պետք է պաուրակի {{ limit }} տարր կամ քիչ։|Այս հավաքածուն պետք է պաուրակի {{ limit }} տարրեր կամ քիչ։',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Այս հավաքածուն պետք է պաուրակի ուղիղ {{ limit }} տարր։|Այս հավաքածուն պետք է պաուրակի ուղիղ {{ limit }} տարրեր։|Այս հավաքածուն պետք է պաուրակի {{ limit }} տարրեր։',
    'Invalid card number.' => 'Քարտի սխալ համար:',
    'Unsupported card type or invalid card number.' => 'Չսպասարկվող կամ սխալ քարտի համար:',
    'This is not a valid International Bank Account Number (IBAN).' => 'Արժեքը վավեր միջազային բանկային հաշվի համար չէ (IBAN)։',
    'This value is not a valid ISBN-10.' => 'Արժեքը ունի անվավեր ISBN-10 ձևաչափ։',
    'This value is not a valid ISBN-13.' => 'Արժեքը ունի անվավեր ISBN-13 ձևաչափ։',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Արժեքը չի համապատասխանում ISBN-10 և ISBN-13 ձևաչափերին։',
    'This value is not a valid ISSN.' => 'Արժեքը չի համապաստասխանում ISSN ձևաչափին։',
    'This value is not a valid currency.' => 'Արժեքը վավեր տարադրամ չէ։',
    'This value should be equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի {{ compared_value }}։',
    'This value should be greater than {{ compared_value }}.' => 'Արժեքը պետք է մեծ լինի, քան {{ compared_value }}։',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի հավասար կամ մեծ քան {{ compared_value }}։',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Արժեքը պետք է լինի ինչպես {{ compared_value_type }} {{ compared_value }}։',
    'This value should be less than {{ compared_value }}.' => 'Արժեքը պետք է լինի փոքր քան {{ compared_value }}։',
    'This value should be less than or equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի փոքր կամ հավասար {{ compared_value }}։',
    'This value should not be equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի հավասար {{ compared_value }}։',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Արժեքը պետք է լինի նունը {{ compared_value_type }} {{ compared_value }}:',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Պատկերի կողմերի հարաբերակցությունը խիստ մեծ է ({{ ratio }}). Մաքսիմալ հարաբերակցությունը՝ {{ max_ratio }}։',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Պատկերի կողմերի հարաբերակցությունը խիստ փոքր է ({{ ratio }}). Մինիմալ հարաբերակցությունը՝ {{ min_ratio }}։',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Պատկերը քառակուսի է({{ width }}x{{ height }}px)։ Քառակուսի նկարներ չեն թույլատրվում։',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Պատկերը ալբոմային ուղղվածության է({{ width }}x{{ height }}px)․ դա չի թույլատրվում։',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Պատկերը պորտրետային ուղղվածության է ({{ width }}x{{ height }}px)․ դա չի թույլատրվում։',
    'An empty file is not allowed.' => 'Դատարկ նիշք չի թույլատրվում։',
    'The host could not be resolved.' => 'Հոսթի անունը հնարավոր չի պարզել:',
    'This value does not match the expected {{ charset }} charset.' => 'Արժեքը չի համընկնում {{ charset }} կոդավորման հետ:',
    'This is not a valid Business Identifier Code (BIC).' => 'Սա վավեր Business Identifier Code (BIC) չէ։',
    'Error' => 'Սխալ',
    'This is not a valid UUID.' => 'Սա վավեր UUID չէ:',
    'This value should be a multiple of {{ compared_value }}.' => 'Այս արժեքը պետք է լինի բազմակի {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Բիզնեսի նույնականացման կոդը (BIC) կապված չէ IBAN- ի հետ {{ iban }}.',
    'This value should be valid JSON.' => 'Այս արժեքը պետք է լինի վավեր JSON:',
    'This collection should contain only unique elements.' => 'Այս հավաքածուն պետք է պարունակի միայն եզակի տարրեր:',
    'This value should be positive.' => 'Այս արժեքը պետք է լինի դրական:',
    'This value should be either positive or zero.' => 'Այս արժեքը պետք է լինի դրական կամ զրոյական:',
    'This value should be negative.' => 'Այս արժեքը պետք է լինի բացասական:',
    'This value should be either negative or zero.' => 'Այս արժեքը պետք է լինի բացասական կամ զրոյական:',
    'This value is not a valid timezone.' => 'Այս արժեքը վավեր ժամանակի գոտի չէ:',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Այս գաղտնաբառն արտահոսվել է տվյալների խախտման մեջ, այն չպետք է օգտագործվի: Խնդրում ենք օգտագործել մեկ այլ գաղտնաբառ:',
    'This value should be between {{ min }} and {{ max }}.' => 'Այս արժեքը պետք է լինի միջև {{ min }} և {{ max }}.',
    'This form should not contain extra fields.' => 'Այս ձևը չպետք է պարունակի լրացուցիչ տողեր.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Վերբեռնված ֆայլը չափազանց մեծ է: Խնդրվում է վերբեռնել ավելի փոքր չափսի ֆայլ.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF արժեքը անթույլատրելի է: Փորձեք նորից ուղարկել ձևը.',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Este valor no es un UUID válido.',
    'This value should be a multiple of {{ compared_value }}.' => 'Este valor debería ser múltiplo de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Este Código de Identificación Bancaria (BIC) no está asociado con el IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Este valor debería ser un JSON válido.',
    'This collection should contain only unique elements.' => 'Esta colección debería tener exclusivamente elementos únicos.',
    'This value should be positive.' => 'Este valor debería ser positivo.',
    'This value should be either positive or zero.' => 'Este valor debería ser positivo o igual a cero.',
    'This value should be negative.' => 'Este valor debería ser negativo.',
    'This value should be either negative or zero.' => 'Este valor debería ser negativo o igual a cero.',
    'This value is not a valid timezone.' => 'Este valor no es una zona horaria válida.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Esta contraseña no se puede utilizar porque está incluida en un listado de contraseñas públicas obtenido gracias a fallos de seguridad de otros sitios y aplicaciones. Por favor utilice otra contraseña.',
    'This value should be between {{ min }} and {{ max }}.' => 'Este valor debe estar entre {{ min }} y {{ max }}.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso.',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario.',
    'fos_user.username.short' => 'El nombre de usuario es demasiado corto.',
    'fos_user.username.long' => 'El nombre de usuario es demasiado largo.',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso.',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo.',
    'fos_user.email.short' => 'La dirección de correo es demasiado corta.',
    'fos_user.email.long' => 'La dirección de correo es demasiado larga.',
    'fos_user.email.invalid' => 'La dirección de correo no es válida.',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña.',
    'fos_user.password.short' => 'La contraseña es demasiado corta.',
    'fos_user.password.mismatch' => 'Las dos contraseñas no coinciden.',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña.',
    'fos_user.new_password.short' => 'La nueva contraseña es demasiado corta.',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida.',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre.',
    'fos_user.group.short' => 'El nombre es demasiado corto.',
    'fos_user.group.long' => 'El nombre es demasiado largo.',
    'fos_group.name.already_used' => 'El nombre ya está en uso.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado.',
    'group.flash.created' => 'El grupo ha sido creado.',
    'group.flash.deleted' => 'El grupo ha sido borrado.',
    'security.login.username' => 'Nombre de usuario',
    'security.login.password' => 'Contraseña',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado.',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'registration.check_email' => 'Se ha enviado un correo electrónico a %email%. Contiene un enlace de activación al que debes acceder para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente.',
    'registration.email.subject' => '¡Bienvenido %username%!',
    'registration.email.message' => '¡Hola %username%!

Para completar la validación de tu cuenta, por favor visita %confirmationUrl%

Este enlace sólo puede utilizarse una vez para validar tu cuenta.

Atentamente,
el Equipo.
',
    'resetting.check_email' => 'Se ha enviado un correo electrónico a tu cuenta de correo. Contiene un enlace de activación al que debes acceder para restablecer tu contraseña.
Nota: Solo se puede solicitar una nueva contraseña cada %tokenLifetime% horas.

Si no recibes un correo electrónico, comprueba tu carpeta de correo no deseado o inténtalo de nuevo.
',
    'resetting.request.username' => 'Nombre de usuario o correo electrónico',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'resetting.email.subject' => 'Restablecer Contraseña',
    'resetting.email.message' => '¡Hola %username%!

Para restablecer tu contraseña, por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nombre de grupo',
    'form.username' => 'Nombre de usuario',
    'form.email' => 'Email',
    'form.current_password' => 'Contraseña actual',
    'form.password' => 'Contraseña',
    'form.password_confirmation' => 'Repita la contraseña',
    'form.new_password' => 'Nueva contraseña',
    'form.new_password_confirmation' => 'Repita la contraseña',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
