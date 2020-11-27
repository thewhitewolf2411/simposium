<template>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <p>Join Meeting</p>
      </div>
      <div class="card-body">
        <div class="form-group row">
          <label class="col-md-4 col-form-label text-md-right" for="alias">Alias: </label>
          <div class="col-md-6">
            <input class="form-control" v-model="nickname" type="text" name="alias">
          </div>

        </div>

        <div class="form-group row">
          <label class="col-md-4 col-form-label text-md-right" for="meetingId">Meeting ID: </label>
          <div class="col-md-6">
            <input class="form-control" v-model="meetingId" type="text" name="meetingId">
          </div>
          
        </div>

        <div class="form-group row">
          <label class="col-md-4 col-form-label text-md-right" for="password">Password: </label>
          <div class="col-md-6">
            <input class="form-control" v-model="password" type="text" name="password">
          </div class="col-md-6">
        </div>


        <button class="btn btn-outline-success">
          <router-link
            :to="{ name: 'meeting', query: { nickname: nickname, meetingId: meetingId, password: password }}"
          >Join Meeting</router-link>
        </button>
        
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "join",
  data: function() {
    return {
      nickname: "",
      meetingId: "",
      password: ""
    };
  }
};
</script>

<style>
.join {
  padding: 5px;
}
.join-card {
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
  padding: 20px;
  width: 30%;
  height: 50%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.12), 0 0 6px rgba(0, 0, 0, 0.04);
}
.join-header {
  border-bottom: 1px solid #d7dae2;
  padding: 20px;
  margin-bottom: 20px;
}
.form-item {
  display: block;
  padding: 5px;
}
</style>