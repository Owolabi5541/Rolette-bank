<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
<div x-data="{ open: false }">
    <button @click="open = true"></button>

    <div x-show="open" x-cloak>
        <div class="fixed inset-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto">
            <div class="relative bg-white w-96 p-6 rounded-lg shadow-xl">
                <h2 class="text-lg font-semibold mb-4">Create Transaction</h2>

                <form method="POST" action="{{ route('transactions.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="amount" class="block font-medium">Amount</label>
                        <input type="number" id="amount" name="amount" step="0.01" required>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block font-medium">Description</label>
                        <input type="text" id="description" name="description" required>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Create</button>
                        <button @click="open = false" class="px-4 py-2 ml-2 text-gray-600 rounded hover:bg-gray-200">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>