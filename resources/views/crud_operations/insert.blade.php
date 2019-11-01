@include('head')
@include('navigate')
<div id="parent">
    <form method="post" action="{{ action('UserController@insertAction') }}" id="form_login">
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Meno a priezvisko</span>
            </div>
            <input type="text" name="firstname" value="Mickey" class="form-control">
            <input type="text" name="lastname" value="Mouse" class="form-control">
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Email: </span>
            </div>
            <input type="email" class="form-control" placeholder="E-mail" aria-label="email"
                   aria-describedby="basic-addon1" name="email" value="mickey.mouse@gmail.com">
        </div>

        <br>
        Dátum narodenia: <br>
        <input type="date" name="birthday" class="form-control" value="1986-05-11" min="1950-01-01" max="2019-12-31">
        <br><br>
        <div style="text-align: center">
            <input type="submit" value="Odoslať" class="btn btn-primary">
        </div>
    </form>
</div>
<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#insert').addClass('active');
    });
</script>
@include('foot')