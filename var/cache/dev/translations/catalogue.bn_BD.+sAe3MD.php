<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('bn_BD', array (
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'আপডেট গ্রুপ',
    'group.show.name' => 'গ্রুপের নাম',
    'group.new.submit' => 'গ্রুপ তৈরি',
    'group.flash.updated' => 'গ্রুপের তথ্য হালনাগাদ হয়েছে',
    'group.flash.created' => 'গ্রুপের তথ্য তৈরি করা হয়েছে',
    'group.flash.deleted' => 'গ্রুপের তথ্য মুছে ফেলা হয়েছে',
    'security.login.username' => 'ব্যবহারকারীর নাম',
    'security.login.password' => 'পাসওয়ার্ড',
    'security.login.remember_me' => 'আমাকে মনে রেখো',
    'security.login.submit' => 'লগ ইন',
    'profile.show.username' => 'ব্যবহারকারীর নাম',
    'profile.show.email' => 'ই-মেইল',
    'profile.edit.submit' => 'আপডেট',
    'profile.flash.updated' => 'প্রোফাইল আপডেট করা হয়েছে।',
    'change_password.submit' => 'পাসওয়ার্ড পরিবর্তন',
    'change_password.flash.success' => 'পাসওয়ার্ড পরিবর্তন সফল হয়েছো',
    'registration.check_email' => '%email% এড্রেসে একটি ই-মেইল পাঠানো হয়েছে. অ্যাকাউন্ট সক্রিয় করার জন্য ই-মেইলে পাঠানো লিংকটি ক্লিক করুন
',
    'registration.confirmed' => '%username% অভিনন্দন, আপনার অ্যাকাউন্ট এখন সক্রিয়।',
    'registration.back' => 'আগের পাতা',
    'registration.submit' => 'নিবন্ধন',
    'registration.flash.user_created' => 'ব্যবহারকারী সফলভাবে তৈরি করা হয়েছে',
    'registration.email.subject' => 'স্বাগতম %username%!',
    'registration.email.message' => 'হ্যালো %username%!

আপনার অ্যাকাউন্ট সক্রিয় করার জন্য - দয়া করে %confirmationUrl% লিংকটি ভিসিট করুর

এই লিঙ্কটি শুধুমাত্র একবার আপনার অ্যাকাউন্ট যাচাই করতে ব্যবহার করা যেতে পারে।

শুভেচ্চান্তে,
এডমিন।
',
    'resetting.check_email' => 'একটি ই-মেইল পাঠানো হয়েছে। পাসওয়ার্ড রিসেট করার জন্য ই-মেইলে পাঠানো লিংকটি ক্লিক করুন।
বিঃদ্রঃ  %tokenLifetime% ঘন্টার মধ্যে শুধুমাত্র একবার রিসেট পাসওয়ার্ড করতে পারবেন।

যদি ই-মেইল টি না পেয়ে থাকেন, তাহলে আপসার স্পাম ফোল্ডারে দেখুন অথবা আবার চেষ্টা করুন।
',
    'resetting.request.username' => 'ব্যবহারকারীর নাম অথবা ই-মেইল',
    'resetting.request.submit' => 'রিসেট পাসওয়ার্ড',
    'resetting.reset.submit' => 'পাসওয়ার্ড পরিবর্তন',
    'resetting.flash.success' => 'পাসওয়ার্ডটি সফলভাবো রিসেট করা হয়েছে',
    'resetting.email.subject' => 'রিসেট পাসওয়ার্ড',
    'resetting.email.message' => 'হ্যালো %username%!

আপনার পাসওয়ার্ড রিসেট করতে - দয়া করে %confirmationUrl% লিংকটি ভিসিট করুর

শুভেচ্চান্তে,
এডমিন।
',
    'layout.logout' => 'লগ আউট',
    'layout.login' => 'লগ ইন',
    'layout.register' => 'নিবন্ধন',
    'layout.logged_in_as' => '%username% হিসাবে লগ ইন করেছেন',
    'form.group_name' => 'গ্রুপের নাম',
    'form.username' => 'ব্যবহারকারীর নাম',
    'form.email' => 'ই-মেইল',
    'form.current_password' => 'বর্তমান পাসওয়ার্ড',
    'form.password' => 'পাসওয়ার্ড',
    'form.password_confirmation' => 'পাসওয়ার্ড আবার লিখুন',
    'form.new_password' => 'নতুন পাসওয়ার্ড',
    'form.new_password_confirmation' => 'নতুন পাসওয়ার্ড আবার লিখুন',
  ),
  'validators' => 
  array (
    'fos_user.username.already_used' => 'ব্যবহারকারীর নামটি ইতিমধ্যে ব্যবহার করা হয়েছে',
    'fos_user.username.blank' => 'অনুগ্রহ করে ব্যবহারকারীর নাম লিখুন',
    'fos_user.username.short' => 'নামটি থুবই ছোট',
    'fos_user.username.long' => 'নামটি থুবই বড়',
    'fos_user.email.already_used' => 'ই-মেইল টি ইতিমধ্যে ব্যবহার করা হয়েছে',
    'fos_user.email.blank' => 'অনুগ্রহ করে একটি ই-মেইল লিখুন',
    'fos_user.email.short' => 'ই-মেইল টি থুবই ছোট',
    'fos_user.email.long' => 'ই-মেইল টি থুবই বড়',
    'fos_user.email.invalid' => 'ই-মেইল টি সঠিক নয়',
    'fos_user.password.blank' => 'অনুগ্রহ করে পাসওয়ার্ড লিখুন',
    'fos_user.password.short' => 'পাসওয়ার্ড টি থুবই ছোট',
    'fos_user.password.mismatch' => 'পাসওয়ার্ডটি মেলেনি',
    'fos_user.new_password.blank' => 'অনুগ্রহ করে একটি নতুন পাসওয়ার্ড লিখুন',
    'fos_user.new_password.short' => 'নতুন পাসওয়ার্ড টি থুবই ছোট',
    'fos_user.current_password.invalid' => 'পাসওয়ার্ডটি সঠিক নয়',
    'fos_user.group.blank' => 'অনুগ্রহ করে একটি নাম লিখুন',
    'fos_user.group.short' => 'নামটি থুবই ছোট',
    'fos_user.group.long' => 'নামটি থুবই বড়',
    'fos_group.name.already_used' => 'নামটি ইতিমধ্যে ব্যবহার করা হয়েছে',
  ),
));

$catalogueBn = new MessageCatalogue('bn', array (
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'আপডেট গ্রুপ',
    'group.show.name' => 'গ্রুপের নাম',
    'group.new.submit' => 'গ্রুপ তৈরি',
    'group.flash.updated' => 'গ্রুপের তথ্য হালনাগাদ হয়েছে',
    'group.flash.created' => 'গ্রুপের তথ্য তৈরি করা হয়েছে',
    'group.flash.deleted' => 'গ্রুপের তথ্য মুছে ফেলা হয়েছে',
    'security.login.username' => 'ব্যবহারকারীর নাম',
    'security.login.password' => 'পাসওয়ার্ড',
    'security.login.remember_me' => 'আমাকে মনে রেখো',
    'security.login.submit' => 'লগ ইন',
    'profile.show.username' => 'ব্যবহারকারীর নাম',
    'profile.show.email' => 'ই-মেইল',
    'profile.edit.submit' => 'আপডেট',
    'profile.flash.updated' => 'প্রোফাইল আপডেট করা হয়েছে।',
    'change_password.submit' => 'পাসওয়ার্ড পরিবর্তন',
    'change_password.flash.success' => 'পাসওয়ার্ড পরিবর্তন সফল হয়েছো',
    'registration.check_email' => '%email% এড্রেসে একটি ই-মেইল পাঠানো হয়েছে. অ্যাকাউন্ট সক্রিয় করার জন্য ই-মেইলে পাঠানো লিংকটি ক্লিক করুন
',
    'registration.confirmed' => '%username% অভিনন্দন, আপনার অ্যাকাউন্ট এখন সক্রিয়।',
    'registration.back' => 'আগের পাতা',
    'registration.submit' => 'নিবন্ধন',
    'registration.flash.user_created' => 'ব্যবহারকারী সফলভাবে তৈরি করা হয়েছে',
    'registration.email.subject' => 'স্বাগতম %username%!',
    'registration.email.message' => 'হ্যালো %username%!

আপনার অ্যাকাউন্ট সক্রিয় করার জন্য - দয়া করে %confirmationUrl% লিংকটি ভিসিট করুর

এই লিঙ্কটি শুধুমাত্র একবার আপনার অ্যাকাউন্ট যাচাই করতে ব্যবহার করা যেতে পারে।

শুভেচ্চান্তে,
এডমিন।
',
    'resetting.check_email' => 'একটি ই-মেইল পাঠানো হয়েছে। পাসওয়ার্ড রিসেট করার জন্য ই-মেইলে পাঠানো লিংকটি ক্লিক করুন।
বিঃদ্রঃ  %tokenLifetime% ঘন্টার মধ্যে শুধুমাত্র একবার রিসেট পাসওয়ার্ড করতে পারবেন।

যদি ই-মেইল টি না পেয়ে থাকেন, তাহলে আপসার স্পাম ফোল্ডারে দেখুন অথবা আবার চেষ্টা করুন।
',
    'resetting.request.username' => 'ব্যবহারকারীর নাম অথবা ই-মেইল',
    'resetting.request.submit' => 'রিসেট পাসওয়ার্ড',
    'resetting.reset.submit' => 'পাসওয়ার্ড পরিবর্তন',
    'resetting.flash.success' => 'পাসওয়ার্ডটি সফলভাবো রিসেট করা হয়েছে',
    'resetting.email.subject' => 'রিসেট পাসওয়ার্ড',
    'resetting.email.message' => 'হ্যালো %username%!

আপনার পাসওয়ার্ড রিসেট করতে - দয়া করে %confirmationUrl% লিংকটি ভিসিট করুর

শুভেচ্চান্তে,
এডমিন।
',
    'layout.logout' => 'লগ আউট',
    'layout.login' => 'লগ ইন',
    'layout.register' => 'নিবন্ধন',
    'layout.logged_in_as' => '%username% হিসাবে লগ ইন করেছেন',
    'form.group_name' => 'গ্রুপের নাম',
    'form.username' => 'ব্যবহারকারীর নাম',
    'form.email' => 'ই-মেইল',
    'form.current_password' => 'বর্তমান পাসওয়ার্ড',
    'form.password' => 'পাসওয়ার্ড',
    'form.password_confirmation' => 'পাসওয়ার্ড আবার লিখুন',
    'form.new_password' => 'নতুন পাসওয়ার্ড',
    'form.new_password_confirmation' => 'নতুন পাসওয়ার্ড আবার লিখুন',
  ),
  'validators' => 
  array (
    'fos_user.username.already_used' => 'ব্যবহারকারীর নামটি ইতিমধ্যে ব্যবহার করা হয়েছে',
    'fos_user.username.blank' => 'অনুগ্রহ করে ব্যবহারকারীর নাম লিখুন',
    'fos_user.username.short' => 'নামটি থুবই ছোট',
    'fos_user.username.long' => 'নামটি থুবই বড়',
    'fos_user.email.already_used' => 'ই-মেইল টি ইতিমধ্যে ব্যবহার করা হয়েছে',
    'fos_user.email.blank' => 'অনুগ্রহ করে একটি ই-মেইল লিখুন',
    'fos_user.email.short' => 'ই-মেইল টি থুবই ছোট',
    'fos_user.email.long' => 'ই-মেইল টি থুবই বড়',
    'fos_user.email.invalid' => 'ই-মেইল টি সঠিক নয়',
    'fos_user.password.blank' => 'অনুগ্রহ করে পাসওয়ার্ড লিখুন',
    'fos_user.password.short' => 'পাসওয়ার্ড টি থুবই ছোট',
    'fos_user.password.mismatch' => 'পাসওয়ার্ডটি মেলেনি',
    'fos_user.new_password.blank' => 'অনুগ্রহ করে একটি নতুন পাসওয়ার্ড লিখুন',
    'fos_user.new_password.short' => 'নতুন পাসওয়ার্ড টি থুবই ছোট',
    'fos_user.current_password.invalid' => 'পাসওয়ার্ডটি সঠিক নয়',
    'fos_user.group.blank' => 'অনুগ্রহ করে একটি নাম লিখুন',
    'fos_user.group.short' => 'নামটি থুবই ছোট',
    'fos_user.group.long' => 'নামটি থুবই বড়',
    'fos_group.name.already_used' => 'নামটি ইতিমধ্যে ব্যবহার করা হয়েছে',
  ),
));
$catalogue->addFallbackCatalogue($catalogueBn);
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
$catalogueBn->addFallbackCatalogue($catalogueEs);

return $catalogue;