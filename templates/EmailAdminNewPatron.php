<!DOCTYPE html>
<html>
<head>
	<title>New Patrons Circle member</title>
	<style>
		table td{
			padding: .5em;
		}

		table td:first-child{
			text-align: right;
		}
	</style>
</head>
<body>
	<table>
		<tbody>
			<tr>
				<td>Name:</td>
				<td><? if($patron->User->Name === null){ ?>Anonymous <? }else{ ?><?= Formatter::ToPlainText($patron->User->Name) ?><? } ?></td>
			</tr>
			<tr>
				<td>Donation type:</td>
				<td><? if($payment->IsRecurring){ ?>Recurring<? }else{ ?>One-time<? } ?></td>
			</tr>
			<tr>
				<td>Donation amount:</td>
				<td><?= Formatter::ToPlainText(number_format($payment->Amount, 2)) ?></td>
			</tr>
			<tr>
				<td>Donation fee:</td>
				<td><?= Formatter::ToPlainText(number_format($payment->Fee, 2)) ?></td>
			</tr>
			<tr>
				<td>Transaction ID:</td>
				<td><a href="https://fundraising.fracturedatlas.org/admin/donations?query=<?= urlencode($payment->TransactionId) ?>"><?= Formatter::ToPlainText($payment->TransactionId) ?></a></td>
			</tr>
		</tbody>
	</table>
</body>
</html>
