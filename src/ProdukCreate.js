import  React, { useState }  from 'react';
import TextField from '@mui/material/TextField';
import Grid from '@mui/material/Grid';
import { Button, Container, Typography }  from '@mui/material';
import { makeStyles } from '@material-ui/core';


const useStyles = makeStyles((theme) => ({
  paper: {
    marginTop: theme.spacing(8),
    dislpay: 'flex',
    flextDirection: 'column',
    alignItems: 'center',
  },
  form: {
    width: '100%',
    marginTop: theme.spacing(3),
  },
  submit: {
    margin: theme.spacing(3,0,2)
  }
}));

export default function ProdukCreate() {
  const classes =  useStyles();
  const handleSubmit = event => {
    event.preventDefault();
    var data = {
      'kode': kode,
      'nama': nama,
      'harga_beli': harga_beli,
      'harga_jual': harga_jual,
      'stok': stok,
      'min_stok': min_stok,
      'jenis_produk_id': jenis_produk_id,
    }
    fetch('https://peserta2.msib5.hendevane.com/laravelSIB5/api/produk-create', {
      method: 'POST',
      headers: {
        Accept: 'application/form-data',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data),
    })
    .then((res) => res.json())
    .then(
      (result)=>{
        alert(result['message'])
        if(result['status'] === 'ok'){
          window.location.href = '/produk';
        }
      }
    )
  }
  const[kode, setKode] = useState('');
  const[nama, setNama] = useState('');
  const[harga_beli, setHarga_beli] = useState('');
  const[harga_jual, setHarga_jual] = useState('');
  const[stok, setStok] = useState('');
  const[min_stok, setMin_stok] = useState('');
  const[jenis_produk_id, setJenis_produk_id] = useState('');

  return (
    <Container maxWidth="xs">
      <div className={classes.paper}>
        <Typography component="h1" variant="h5">
          Form Produk
        </Typography>
        <form className={classes.form} onSubmit={handleSubmit}>
          <Grid container spacing={2}>
            {/* section kode */}
            <Grid item xs={12} sm={6}>
            <TextField id="outlined-basic" label="Kode" variant="outlined" 
              required onChange={(e) => setKode(e.target.value)}
            />
            </Grid>

            {/* section nama */}
            <Grid item xs={12} sm={6}>
            <TextField id="outlined-basic" label="Nama" variant="outlined" 
            required onChange={(e) => setNama(e.target.value)} 
            />
            </Grid>

            {/* section harga beli */}
            <Grid item xs={12}>
            <TextField id="outlined-basic" label="Harga Beli" 
              fullWidth variant="outlined" 
              required onChange={(e) => setHarga_beli(e.target.value)} 
            />
            </Grid>

            {/* section harga jual  */}
            <Grid item xs={12}>
            <TextField id="outlined-basic" label="Harga Jual"
              fullWidth variant="outlined" 
              required onChange={(e) => setHarga_jual(e.target.value)} 
            />
            </Grid>

            {/* section stok */}
            <Grid item xs={12}>
            <TextField id="outlined-basic" label="Stok"
              fullWidth variant="outlined" 
              required onChange={(e) => setStok(e.target.value)} 
            />
            </Grid>

            {/* section min stok  */}
            <Grid item xs={12}>
            <TextField id="outlined-basic" label="Minimal Stok" 
              fullWidth variant="outlined" 
              required onChange={(e) => setMin_stok(e.target.value)} 
            />
            </Grid>

            {/* section jenis produk */}
            <Grid item xs={12}>
            <TextField id="outlined-basic" label="Jenis Produk" 
              fullWidth variant="outlined" 
              required onChange={(e) => setJenis_produk_id(e.target.value)} 
            />
            </Grid>
          </Grid>
        <Button
          type="submit" fullWidth variant="contained" color="primary"
          className={classes.submit}
        >
          Create
        </Button>
        </form>
      </div>
    </Container>
  );
}