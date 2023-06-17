<!DOCTYPE html>
<html>
<head>
 <title>VG Abogados Asociados</title>
</head>
<body>
    <table width="670" style="border-collapse:collapse; with:100%;border:1px solid #000" class="" border=1>
    <thead>
        <tr>
            <th colspan="2" border=1>{!! $subject !!}</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nombre</td>
            <td>{!! $nameFrom !!}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{!! $email !!}</td>
	</tr>
 	<tr>
            <td>Teléfono</td>
            <td>{!! $phone !!}</td>
        </tr>

        <tr>
            <td>Área de práctica</td>
            <td>{!! $practiceAreaTitle !!}</td>
        </tr>
        <tr>
            <td>Motivo</td>
            <td>{!! $subjectTitle !!}</td>
	</tr>
        <tr>
            <td colspan="2">
                <p>{!! $messageText !!}</p>
            </td>
        </tr>
    </tbody>
    </table>
    <p>Email generado por FullStack SpA</p>
</body>
</html>
