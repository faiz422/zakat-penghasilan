<!DOCTYPE html>
<html>
<head>

<title>Lihat Zakat</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h1>Daftar Zakat</h1>

<table>
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>No. Handphone</th>
    <th>Jumlah Zakat</th>
  </tr>
  @foreach($zakat as $z)
  <tr>
      <td>{{ $z->name }}</td>
      <td>{{ $z->phone }}</td>
      <td>{{ $z->jumlah }}</td>
      <td>
        <a href="/zakat/edit/{{ $z->id }}">Edit</a>
        |
        <a href="/zakat/hapus/{{ $z->id }}">Hapus</a>
      </td>
    </tr>
    @endforeach
</table>

</body>
</html>
