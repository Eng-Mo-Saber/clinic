<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- header  -->



<body>
    <div class="page-wrapper">
        <!-- Navbar Section -->


        <div class="container">
            <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
                <form class="form">
                    <div class="form-items">
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="password">password</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                    </div>
                    <div style="margin: 10px 0; padding: 10px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
                        <label for="role">Select Type:</label>
                        <select name="role" id="role" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                            <option value="user" name="user" >User</option>
                            <option value="admin" name="admin" >Admin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create account</button>
                </form>
                <div class="d-flex justify-content-center gap-2">
                    <span>already have an account?</span><a class="link" href="./../public/index.php?page=login"> login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>