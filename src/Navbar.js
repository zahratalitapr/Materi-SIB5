import * as React from 'react';
import AppBar from '@mui/material/AppBar';
import Box from '@mui/material/Box';
import Toolbar from '@mui/material/Toolbar';
import Typography from '@mui/material/Typography';
import IconButton from '@mui/material/IconButton';
import MenuIcon from '@mui/icons-material/Menu';
import {Link} from 'react-router-dom';
import Stack from '@mui/material/Stack';
import Button from '@mui/material/Button';

export default function DenseAppBar() {
  return (
    <Box sx={{ flexGrow: 1 }}>
      <AppBar position="static">
        <Toolbar variant="dense">
          <IconButton edge="start" color="inherit" aria-label="menu" sx={{ mr: 2 }}>
            <MenuIcon />
          </IconButton>
          <Typography variant="h6" color="inherit" component="div">
          <Stack spacing={2} direction="row">
            <Link to="/">
            <Button variant="contained" color="primary">
              Home
            </Button>
            </Link>
            <Link to="/produk">
            <Button variant="contained" color="primary">
              Produk
            </Button>
            </Link>
            <Link>
            <Button variant="contained" color="primary">
              Jenis Produk
            </Button>
            </Link>
            </Stack>
          </Typography>
        </Toolbar>
      </AppBar>
    </Box>
  );
}
