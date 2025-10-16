<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>

    <div class="hero min-h-[calc(100vh-16rem)]">
        <div class="hero-content flex-col">
            <div class="card w-96 bg-base-100">
                <div class="card w-96 bg-base-100">
                    <div class="card-body">
                        <h1 class="text-3xl font-bold text-center mb-6">Create Account</h1>

                        <form action="{{ route('register.post') }}" method="POST">
                            @csrf
                            <!-- Name -->
                            <label for="" class="floating-label mb-6">
                                <input required type="text" class="input input-bordered @error('name') input-error @enderror" placeholder="joh Doe" name="name" value="{{ old('name') }}">
                                <span>Name</span>
                            </label>

                            @error('name')
                                <div class="label -mt-4 mb-2">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </div>
                                @enderror

                                <!-- Email  -->

                                <label for="" class="floating-label mb-6">
                                    <input
                                        required
                                        value="{{ old('email') }}"
                                        name="email"
                                        placeholder="mail@example.com"
                                        type="email"
                                        class="input input-bordered @error('email') input-error @enderror"
                                    >
                                    <span>Email</span>
                                </label>

                                @error('email')
                                    <div class="label -mt-4 mb-2">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </div>
                                @enderror

                                <!-- Password  -->

                                <label for="" class="floating-label mb-6">
                                    <input
                                        required
                                        name="password"
                                        placeholder="••••••••"
                                        type="password"
                                        class="input input-bordered @error('password') input-error @enderror
                                    ">
                                    <span>Password</span>
                                </label>

                                @error('password')
                                    <div class="label -mt-4 mb-2">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </div>
                                @enderror

                                <!-- Password Confirmation  -->
                                <label for="" class="floating-label mb-6">
                                    <input
                                        required
                                        name="password_confirmation"
                                        placeholder="••••••••"
                                        type="password"
                                        class="input input-bordered @error('password_confirmation') input-error @enderror"
                                    >
                                    <span>Confirm Password</span>
                                </label>

                                @error('password_confirmation')
                                    <div class="label -mt-4 mb-2">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </div>
                                @enderror

                                <!-- Submit Button-->
                                <div class="form-control mt-8">
                                    <button type="submit" class="btn btn-primary btn-sm w-full">
                                        Register
                                    </button>
                                </div>
                            </form>
                            <div class="divider">OR</div>
                            <p class="text-center text-sm">Already have an account?<a href="{{ route('login') }}" class="link link-primary">Sign in</a></p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
