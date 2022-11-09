<template>
	<form method="POST" action="/register">
		<div class="flex-box">
			<div
				class="icon-wraper"
				:style="`background-image: url(${formData.photo})`"
			>
				<i class="far fa-user" v-if="!formData.photo"></i>
			</div>
			<div>
				<h5>Add your photo (optional)</h5>
				<p class="text-sm text-muted m-0">Supported formats: jpg, jpeg, png.</p>
				<label for="file-picker"
					><i class="fa fa-upload"></i> click to upload</label
				>
				<input
					type="file"
					hidden
					id="file-picker"
					accept="image/*"
					@change="setImageFile"
				/>
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<input
						type="text"
						name="name"
						v-model="formData.name"
						:class="(errors.has('name') ? 'is-invalid' : '') + ' form-control'"
						placeholder="Full Name"
					/>
					<span class="invalid-feedback" role="alert" v-if="errors.has('name')">
						<strong>{{ errors.get("name") }}</strong>
					</span>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<input
						type="date"
						name="dob"
						v-model="formData.dob"
						:class="(errors.has('dob') ? 'is-invalid' : '') + ' form-control'"
						placeholder="DOB"
					/>
					<span class="invalid-feedback" role="alert" v-if="errors.has('dob')">
						<strong>{{ errors.get("dob") }}</strong>
					</span>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<select
						:class="
							(errors.has('country') ? 'is-invalid' : '') + ' form-control'
						"
						name="country"
						placeholder="Country"
						v-model="formData.country"
					>
						<option value=""></option>
						<option>Ghana</option>
						<option>Nigeria</option>
					</select>
					<span
						class="invalid-feedback"
						role="alert"
						v-if="errors.has('country')"
					>
						<strong>{{ errors.get("country") }}</strong>
					</span>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<input
						type="email"
						name="email"
						v-model="formData.email"
						:class="(errors.has('email') ? 'is-invalid' : '') + ' form-control'"
						placeholder="Email Address"
					/>
					<span
						class="invalid-feedback"
						role="alert"
						v-if="errors.has('email')"
					>
						<strong>{{ errors.get("email") }}</strong>
					</span>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<vue-country-code
								:enabledCountryCode="true"
								@onSelect="onCountrySelect"
							>
							</vue-country-code>
						</div>
						<input
							type="text"
							name="phone"
							v-model="formData.phone"
							:class="
								(errors.has('phone') ? 'is-invalid' : '') + ' form-control'
							"
							placeholder="23 123 4567"
						/>
					</div>

					<span
						class="invalid-feedback"
						role="alert"
						v-if="errors.has('phone')"
					>
						<strong>{{ errors.get("phone") }}</strong>
					</span>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<input
						type="text"
						name="username"
						v-model="formData.username"
						:class="
							(errors.has('username') ? 'is-invalid' : '') + ' form-control'
						"
						placeholder="Username"
					/>
					<span
						class="invalid-feedback"
						role="alert"
						v-if="errors.has('username')"
					>
						<strong>{{ errors.get("username") }}</strong>
					</span>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<input
						type="password"
						name="password"
						v-model="formData.password"
						:class="
							(errors.has('password') ? 'is-invalid' : '') + ' form-control'
						"
						placeholder="Password"
					/>
					<span
						class="invalid-feedback"
						role="alert"
						v-if="errors.has('password')"
					>
						<strong>{{ errors.get("password") }}</strong>
					</span>
				</div>
			</div>
		</div>

		<button
			type="submit"
			class="btn btn-custom"
			:disabled="errors.any() || processingForm"
			@click.prevent="register"
		>
			<span
				class="spinner-border spinner-border-sm"
				role="status"
				aria-hidden="true"
				v-if="processingForm"
			></span>
			Create Account
		</button>
	</form>
</template>

<script>
import FormErrors from "../libs/FormErrors";
export default {
	data() {
		return {
			errors: new FormErrors(),
			processingForm: false,

			formData: {
				dial_code: "",
				photo: null,
				name: "",
				email: "",
				dob: "",
				country: "",
				phone: "",
				password: "",
				username: "",
			},
		};
	},

	methods: {
		register() {
			axios
				.post("/register", this.formData)
				.then(() => {
					window.location = "/";
				})
				.catch(({ response }) => {
					console.log(response.data);
					if (response.status == 422) {
						this.errors.record(response.data);
					}
					alert(response.data.message);
					this.processingForm = false;
				});
		},

		onCountrySelect({ dialCode }) {
			this.formData.dial_code = dialCode;
		},

		setImageFile(e) {
			console.log("change");
			this.errors.clear("photo");

			let image = e.target.files[0];
			this.createBase64Image(image);
		},

		createBase64Image(file) {
			let reader = new FileReader();

			reader.onload = (e) => {
				this.formData.photo = e.target.result;
			};

			reader.readAsDataURL(file);
		},
	},
};
</script>

<style>
</style>