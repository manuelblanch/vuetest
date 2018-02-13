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
						<td>{{ test.prova1 }}</td>
						<td>{{ test.prova2 }}</td>
						<td>{{ test.prova3 }}</td>
						<td>
							<router-link :to="name: 'editTest', params: {id: test.id}}" class="btn btn-xs btn-default">
								Editar
							</router-link>
							
				</thead>
</template>