<div class="fixed z-10 p-4 rounded-md w-96 right-10 top-4">
    <div x-data="{
        open: false,
        message: '',
        type: 'success',
        remove(message) {
            this.message = ''
            this.type = 'success'
            this.open = false
        },
    }">
        <div x-on:flash.window="open = true; message = $event.detail.message; type = $event.detail.type;"
            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="opacity-0 -translate-y-5" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-5"
            x-bind:class="{
                'bg-green-400 text-green-900': type == 'success',
                'bg-yellow-400 text-yellow-900': type == 'warn',
                'bg-blue-400 text-blue-900': type == 'info',
                'bg-red-400 text-red-900': type == 'danger',
            }"
            class="flex justify-between p-4 rounded-md" x-show="open">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" @class(['w-6 h-6'])
                x-bind:class="{
                    'text-green-900': type == 'success',
                    'text-yellow-900': type == 'warn',
                    'text-blue-900': type == 'info',
                    'text-red-900': type == 'danger',
                }">
                <path stroke-linecap="round" stroke-linejoin="round" x-show="type == 'success'"
                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                <path stroke-linecap="round" stroke-linejoin="round" x-show="type == 'danger'"
                    d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                <path stroke-linecap="round" stroke-linejoin="round" x-show="type == 'warn'"
                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />

                <path stroke-linecap="round" stroke-linejoin="round" x-show="type == 'info'"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
            </svg>
            <span x-text="message"></span>
            <div class="flex flex-shrink-0 ml-4">
                <button x-on:click="remove(message)"
                    class="inline-flex transition duration-150 ease-in-out focus:outline-none"
                    x-bind:class="{
                        'bg-green-400 text-green-900 focus:text-green-500': type == 'success',
                        'bg-yellow-400 text-yellow-900 focus:text-yellow-500': type == 'warn',
                        'bg-blue-400 text-blue-900 focus:text-blue-500': type == 'info',
                        'bg-red-400 text-red-900 focus:text-red-500': type == 'danger',
                    }">
                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
