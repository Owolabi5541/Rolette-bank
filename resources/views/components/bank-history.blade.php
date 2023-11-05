@props(['transactions'])
<div class="overflow-x-auto">
    <div class="max-h-50vh overflow-y-auto">
        <table class="w-full max-w-full divide-y divide-sky-200">
            <thead class="bg-sky-50">
                <!-- ... (table header) ... -->
                <tr>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-sky-200">
                @foreach($transactions as $transaction)
                <tr>
                    <td class="px-4 py-2 md:px-6 md:py-3 whitespace-nowrap">{{ $transaction->created_at }}</td>
                    <td class="px-4 py-2 md:px-6 md:py-3 whitespace-nowrap">{{ $transaction->description }}</td>
                    <td class="px-4 py-2 md:px-6 md:py-3 whitespace-nowrap">{{ $transaction->amount }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



