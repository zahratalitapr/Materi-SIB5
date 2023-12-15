import React, {useEffect, useState} from 'react';
import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableContainer from '@mui/material/TableContainer';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Paper from '@mui/material/Paper';
import Stack from '@mui/material/Stack';
import Button from '@mui/material/Button';
import {Link} from 'react-router-dom';


// function createData(name, calories, fat, carbs, protein) {
//   return { name, calories, fat, carbs, protein };
// }

// const rows = [
//   createData('Frozen yoghurt', 159, 6.0, 24, 4.0),
//   createData('Ice cream sandwich', 237, 9.0, 37, 4.3),
//   createData('Eclair', 262, 16.0, 24, 6.0),
//   createData('Cupcake', 305, 3.7, 67, 4.3),
//   createData('Gingerbread', 356, 16.0, 49, 3.9),
// ];


// deklarasi variable dan pemanggilan api
export default function Produk() {
  const[produk, setProduk] =  useState([]);
  const ProdukGet = () => {
    fetch('https://peserta2.msib5.hendevane.com/laravelSIB5/api/produk')
    .then(res => res.json())
    .then(
      (result) => {
        setProduk(result['data'])
      }
    )
  }

  //memanggil fungsi produkGet
  useEffect(() => {
    ProdukGet();
  }, []);

  return (
    <TableContainer component={Paper}>
      <Stack spacing={2} direction="row">
        <Link to="/produk/create">
      <Button variant="contained" color="primary">Create</Button>
      </Link>
      </Stack>
      <Table sx={{ minWidth: 650 }} aria-label="simple table">
        <TableHead>
          <TableRow>
            <TableCell>Kode</TableCell>
            <TableCell align="right">Nama</TableCell>
            <TableCell align="right">Harga Beli</TableCell>
            <TableCell align="right">Harga Jual</TableCell>
            <TableCell align="right">Stok</TableCell>
            <TableCell align="right">Minimal Stok</TableCell>
            <TableCell align="right">Jenis Produk</TableCell>
            <TableCell align="right">Foto</TableCell>
          </TableRow>
        </TableHead>
        <TableBody>
          {produk.map((row) => (
            <TableRow
              key={row.name}
              sx={{ '&:last-child td, &:last-child th': { border: 0 } }}
            >
              <TableCell component="th" scope="row">
                {row.kode}
              </TableCell>
              <TableCell align="right">{row.nama}</TableCell>
              <TableCell align="right">{row.harga_beli}</TableCell>
              <TableCell align="right">{row.harga_jual}</TableCell>
              <TableCell align="right">{row.stok}</TableCell>
              <TableCell align="right">{row.min_stok}</TableCell>
              <TableCell align="right">{row.jenis}</TableCell>
              <TableCell align="right">
                {/* <img src={'https://peserta2.msib5.hendevane.com/laravelSIB5/public/admin/img/'+row.foto}
                width="100px" height="100px" /> */}

                {row.foto == null ? <TableCell align="right">
                  <img src={'https://peserta2.msib5.hendevane.com/laravelSIB5/public/admin/img/nophoto.jpg'}
                  width="100px" height="100px" ></img>
                </TableCell> : ''}
                {row.foto == null ? '':<TableCell align="right">
                  <img src={'https://peserta2.msib5.hendevane.com/laravelSIB5/public/admin/img/'+row.foto}
                  width="100px" height="100px"></img>
                </TableCell>}
              </TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
    </TableContainer>
  );
}
