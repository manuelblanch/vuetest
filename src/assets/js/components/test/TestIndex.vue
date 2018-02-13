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
							<a href="#"
								class="btn btn-xs btn-danger"
								v-on:click="deleteEntry(test.id, index)">
								Esborrar
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</template>

<script>
	export default {
		data: function () {
			return {
				test:[]
			}

		},
		mounted() {
			var app = this;
			axios.get('/api/v1/test')
				.then(function (resp) {
					app.test = resp.data;
					})
					.catch(function (resp) {
						console.log(resp);
						alert("No s'ha pogut carregar");
					});
			},
			methods: {
				deleteEntry(id, index) {
					if (confirm("Segur que vols esborrar?")){

					}
				}
			}
		}
	}