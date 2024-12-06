<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaction</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Transaction</h1>
        <form action="{{ route('transactions.update', $transaction) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="employee_name" class="form-label">Employee Name:</label>
                <input type="text" name="employee_name" id="employee_name" class="form-control" value="{{ $transaction->employee_name }}" required>
            </div>
            <div class="mb-3">
                <label for="sender_name" class="form-label">Sender Name:</label>
                <input type="text" name="sender_name" id="sender_name" class="form-control" value="{{ $transaction->sender_name }}" required>
            </div>
            <div class="mb-3">
                <label for="receiver_name" class="form-label">Receiver Name:</label>
                <input type="text" name="receiver_name" id="receiver_name" class="form-control" value="{{ $transaction->receiver_name }}" required>
            </div>
            <div class="mb-3">
                <label for="sender_account" class="form-label">Sender Account:</label>
                <input type="text" name="sender_account" id="sender_account" class="form-control" value="{{ $transaction->sender_account }}" required>
            </div>
            <div class="mb-3">
                <label for="receiver_account" class="form-label">Receiver Account:</label>
                <input type="text" name="receiver_account" id="receiver_account" class="form-control" value="{{ $transaction->receiver_account }}" required>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount:</label>
                <input type="number" name="amount" id="amount" class="form-control" value="{{ $transaction->amount }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>