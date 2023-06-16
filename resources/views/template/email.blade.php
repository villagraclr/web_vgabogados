<!DOCTYPE html>
<html>
<head>
 <title>VG Abogados Asociados</title>
</head>
<body>
    <table class="">
    <thead>
        <tr>
            <th colspan="2">{!! $mailData["subject"] !!}</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nombre</td>
            <td>{!! $mailData["name"] !!}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{!! $mailData["email"] !!}</td>
        </tr>
        <tr>
            <td>Área de práctica</td>
            <td>{!! $mailData["practice_area_title"] !!}</td>
        </tr>
        <tr>
            <td>Motivo</td>
            <td>{!! $mailData["subject_title"] !!}</td>
        </tr>
        <tr>
            <td colspan="2">
                <p>{!! $mailData["message"] !!}</p>
            </td>
        </tr>
    </tbody>
    </table>
    <p>Email generado por FullStack SpA</p>
</body>
</html>
