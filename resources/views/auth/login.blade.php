<section class="flex justify-around items-start h-full">
    <form action="post" class="flex flex-col items-start w-auto p-12 bg-yellow-500 rounded-2xl h-1/2 mt-9">
        <span class="mb-10 text-white pb-5 text-2xl font-semibold">Sign in</span>
        <div>
            <label for="" class="font-semibold text-lg text-white">Email</label>
            <input class=" block w-96 mb-10 h-10 p-2.5 text-xl rounded-lg border-none outline-none focus:border-white"  type="email" placeholder="sample@email.com">
        </div>
        <div>
            <label for="" class="font-semibold text-lg text-white">Password</label>
            <input class=" block w-96 mb-10 h-10 p-2.5 text-xl rounded-lg border-none outline-none focus:border-white"  type="password" placeholder="Password">
        </div>
        <a href="/auth/forgotpassword" class="self-end text-white mb-10 ">Forgot password</a>
        <button type="submit" class="mb-10 self-center w-96 h-10 font-meduim text-lg text-white rounded-lg border-none bg-sky-900">Sign in</button>
    </form>
</section>