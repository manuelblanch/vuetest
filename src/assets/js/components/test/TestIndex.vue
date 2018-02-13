<template>
	<div>
		<router-link :to="{name: 'createIndex'}" class="btn btn-success">Crea un nou test</router-link>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">Test list</div>
		<div class="panel-body">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Prova1</th>
						<th>Prova2</th>
						<th>Prova3</th>
						<th width="100">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="test, index in test">
				</thead>
</template>