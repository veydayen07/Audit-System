<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icons/bootstrap-icons-1.13.1/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="bg-[#F7F9FB]  flex flex-col justify-center items-center h-screen">
        <div class="login-form-container w-[448px] rounded-xl border border-[#E0E3E5] flex flex-col justify-center items-center p-8.25 bg-white shadow-sm">
            <div class="form-header mb-6 flex flex-col justify-center items-center">
                <img src="./assets/img/logo.svg" alt="" class="h-16 w-16 mb-[12px]">
                <h1 class="text-dark mb-[4px] text-[32px]">AuditSystem</h1>
                <span class="text-[#444653]">Enterprise Compliance Portal</span>
            </div>
            <form action="" class="w-full ">
                <div class="input-group mb-3">
                    <i class="bi bi-person absolute z-50 h-full text-[#C4C5D5] flex justify-center items-center pl-2.5 text-lg"></i>
                    <input type="text" class="form-control pl-9! rounded-1 placeholder:text-[#6B7280]!" placeholder="Username">

                </div>
                <div class="input-group mb-3">
                    <i class="bi bi-lock absolute z-50 h-full  text-[#C4C5D5] flex justify-center items-center pl-2.5 text-lg"></i>
                    <input type="password" class="form-control rounded-1 pl-9! placeholder:text-[#6B7280]! " placeholder="******">
                </div>
                <div class="flex justify-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            Default checkbox
                        </label>
                    </div>
                    <a href="#" class="text-[#00288E]! no-underline">Forgot Password?</a>

                </div>
                <div class="py-6 w-full border-b border-[#E0E3E5] mb-2">
                    <button class="btn bg-[#00288E]! text-white w-full">Sign In</button>
                </div>
                <span class="text-[#444653] ">Secure Access Only. Unauthorized entry is prohibited.</span>
            </form>
        </div>
    </div>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>