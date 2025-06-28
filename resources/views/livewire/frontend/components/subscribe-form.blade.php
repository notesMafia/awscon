<div>
    <form wire:submit.prevent="subscribe">
        <div class="mt-4 flex flex-col items-center gap-2 sm:flex-row sm:gap-3 bg-white rounded-lg p-2 dark:bg-neutral-900">
            <div class="w-full">
                <label for="hero-input" class="sr-only">Subscribe</label>
                <x-mary-input class="py-3 px-4 block w-full border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                              placeholder="Enter your email"
                              wire:model="email"
                />
            </div>
            <x-mary-button label="Subscribe"
                           class="btn btn-warning bg-amber-400"
                           type="submit"
                           spinner="subscribe"
            />
        </div>
        <p class="mt-3 text-sm text-gray-400">
            Newsletter, Podcasts, Trainings & Courses
        </p>
    </form>
</div>
