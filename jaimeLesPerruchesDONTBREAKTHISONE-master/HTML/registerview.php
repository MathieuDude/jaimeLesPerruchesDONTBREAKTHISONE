<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-4">
            <h2>REGISTER</h2>
            <form method = "post" action = "./DOMAINLOGIC/register.dom.php">

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required><br>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                        <label for="username">username:</label>
                        <input type="text" class="form-control" name="username" id="username" required><br>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name="pw" id="pwd" required><br>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="pwd">password validation:</label>
                    <input type="password" class="form-control" name="pwValidation" id="pwValidation" required><br>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
                <div class="form-group">
                        <label for="img">Image de profile:</label>
                    <input type="file" class="form-control" name="img" id="img" required><br>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>  
              
                <button class="btn btn-success" type="submit">Login</button>

            </form>
        </div>
    </div>
</div>
