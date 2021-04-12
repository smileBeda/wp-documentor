<?php

echo '### ', $hook->get_tag()->get_name(), $eol;
echo $eol;

$summary = $hook->get_summary();

if ( null !== $summary ) {
	echo '*', $summary, '*', $eol;
	echo $eol;
}

$description = $hook->get_description();

if ( null !== $description ) {
	echo $description, $eol;
	echo $eol;
}

$arguments = $hook->get_arguments();

if ( \count( $arguments ) > 0 ) {
	echo 'Argument | Type | Description', $eol; 
	echo '-------- | ---- | -----------', $eol;

	foreach ( $arguments as $argument ) {
		echo $argument->get_name(), ' | ', $argument->get_type(), ' | ', $argument->get_description(), $eol;
	}
}

echo $eol;
