<?php
$sajax_request_type = "POST";

sajax_init();

sajax_export("olvidopass","validacuit","validadni");

sajax_handle_client_request();

?>
<!DOCTYPE html>
<html lang="es">
<script language=javascript>

<?php

sajax_show_javascript();

?>




</script>
