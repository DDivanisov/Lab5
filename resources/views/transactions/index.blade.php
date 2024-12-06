<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Transaction List</h1>
        <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Add Transaction</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Sender Name</th>
                    <th>Receiver Name</th>
                    <th>Sender Account</th>
                    <th>Receiver Account</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->employee_name }}</td>
                        <td>{{ $transaction->sender_name }}</td>
                        <td>{{ $transaction->receiver_name }}</td>
                        <td>{{ $transaction->sender_account }}</td>
                        <td>{{ $transaction->receiver_account }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->transaction_date }}</td>
                        <td>
                            <a href="{{ route('transactions.edit', $transaction) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('transactions.destroy', $transaction) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
