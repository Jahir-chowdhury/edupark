<!DOCTYPE html>
<html lang="en">

<head>
  <title>vue Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<div class="continer" id="app">
	<div class="row">
		<div class="col-md-12">
			<div class="clearfix">
				<span>Laravel + VUE </span>
				<a class="btn btn-success btn-sm float-right"  @click="create()">ADD NEW</a>
			</div>
			<table class="table table-borderd table-condensed">
				<tr>
					<td>Id</td>
					<td>Name</td>
					<td>EMAIL</td>
					<td>PHONE</td>
					<td>ACTION</td>
				</tr>
				<tr v-for="row in data">
					<td>@{{row.id}}</td>
					<td>@{{row.name}}</td>
					<td>@{{row.email}}</td>
					<td>@{{row.phone}}</td>
					<td>
						<button @click="edit(row)" type="button" class="btn btn-xs btn-warning"
						tittle="Edit Recored">Edit</button>
						<button @click="deleteRecord(row)" type="button" class="btn btn-xs btn-danger"
						tittle="Delete Recored">Del</button>
					</td>
				</tr>
			</table>
			<div class="modal fade" id="modal">
				<div class="modal-dialog">
					<div class="modal-content" >
						<div class="modal-header">
							<button type="button" class="close"data-dismiss="modal" aria-hidden="true">&times;
							</button>
							<h4 class="modal-title">@{{isInsert?'New contact':'Edit contact'}}</h4>
						</div>
						<div class="modal-body">
							<div class="from-group">
								<label>NAME</label>
								<input type="from-control input-sm" type="text" v-modal="Contact.name">
							</div>
							<div class="from-group">
								<label>EMAIL</label>
								<input type="from-control input-sm" type="text" v-modal="Contact.email">
							</div>
							<div class="from-group">
								<label>PHONE</label>
								<input type="from-control input-sm" type="text" v-modal="Contact.phone">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">close
							</button>
							<button v-if="isInsert" type="button" class="btn btn-primary" @click="store(Contact)">save
							</button>
							<button v-if="!isInsert"type="button" class="btn btn-primary" @click="update(contact)">update
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js"></script>
<script>
	Vue.directive('modal', {
  inserted(el, binding) {
    document.modal = binding.value;
  },
});
	var csrfToken='{{csrf_token()}}';
	var adminUrl='{{url('admin')}}';
	var app=new Vue({
		el:'#app',
		data:{
			data:[],
			isInsert:true,
			Contact:{name:null,email:null,phone:null}
			},
			created:function(){
				this.init()
			},
			methods:{
				init:function(){
					this.$http.get(adminUrl + '/contacts/data')
					.then(function(res){
						this.data=res.data
					})
				},
				create:function(){
					this.isInsert=true,
						this.Contact={}
						$('#modal').modal()
				},
				store:function(data){
					if(!confirm('Are you sure?')) return;
					data._token=csrfToken;
					this.$http.post(adminUrl + '/contacts/store', data)
					.then(function(res){
						this.init();
						$('#modal').modal('hide');
						this.Contact={};
					})
				},
				edit:function(){

				},
			}
	})
</script>