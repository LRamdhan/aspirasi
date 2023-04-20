import AppBar from '@mui/material/AppBar'
import Toolbar from '@mui/material/Toolbar'
import Typography from '@mui/material/Typography'
import MenuRoundedIcon from '@mui/icons-material/MenuRounded';
import IconButton from '@mui/material/IconButton'
import Drawer from '@mui/material/Drawer'
import List from '@mui/material/List'
import ListItem from '@mui/material/ListItem'
import ListItemText from '@mui/material/ListItemText'
import ListItemIcon from '@mui/material/ListItemIcon'
import ListItemButton from '@mui/material/ListItemButton'
import HomeRoundedIcon from '@mui/icons-material/HomeRounded';
import InfoRoundedIcon from '@mui/icons-material/InfoRounded';
import LoginRoundedIcon from '@mui/icons-material/LoginRounded';
/** @jsxImportSource @emotion/react */
import {css} from "@emotion/react";
import {Link} from "react-router-dom";
import { useState } from 'react';

const Navbar = () => {
  const [drawer, setDrawer] = useState(false);
 
  const menu = css`
    color: white;
    @media(min-width: 500px) {
      & {
        display: none;
      }
    }
  `;

  const link = css`
    & span {
      display: none;
    }
    @media(min-width: 500px) {
      padding-left: 70px;
      padding-right: 70px;
      & span {
        display: block;
      }
    }
  `;

  const navLink = css`
    & {
      width: 100%;
      text-decoration: none;
      text-transform: capitalize;
      color: inherit;
    }
  `;

  return (<>
    <Drawer
        variant="temporary"
        anchor="left"
        open={drawer}
        onClose={() => setDrawer(false)}
      >
        <List sx={{width: 230}}>
          <ListItem sx={{padding: 0}}>
            <Link to="/" css={navLink}>
              <ListItemButton onClick={() => setDrawer(false)}>
                <ListItemIcon><HomeRoundedIcon/></ListItemIcon>
                <ListItemText primary="home"/>
              </ListItemButton>
            </Link>
          </ListItem>
          <ListItem sx={{padding: 0}}>
            <Link to="/about" css={navLink}>
              <ListItemButton onClick={() => setDrawer(false)}>
                <ListItemIcon><InfoRoundedIcon/></ListItemIcon>
                <ListItemText primary="about"/>
              </ListItemButton>
            </Link>
          </ListItem>
          <ListItem sx={{padding: 0}}>
            <Link to="/login" css={navLink}>
              <ListItemButton onClick={() => setDrawer(false)}>
                <ListItemIcon><LoginRoundedIcon/></ListItemIcon>
                <ListItemText primary="login"/>
              </ListItemButton>
            </Link>
          </ListItem>
        </List>
      </Drawer>
      <AppBar position="fixed" color="primary" elevation={0}>
        <Toolbar variant="dense" css={link}>
          <IconButton css={menu} onClick={() => setDrawer(true)}><MenuRoundedIcon/></IconButton>
          <Link to="/" style={{color: "inherit", textDecoration: "none"}}>
            <Typography component="span" variant="overline" sx={{marginRight: 8}}>home</Typography>
          </Link>
          <Link to="/about" style={{color: "inherit", textDecoration: "none"}}>
            <Typography component="span" variant="overline">about</Typography>
          </Link>
          <Typography component="span" variant="overline" sx={{flexGrow: 1}}></Typography>
          <Link to="/login" style={{color: "inherit", textDecoration: "none"}}>
            <Typography component="span" variant="overline">login</Typography>
          </Link>
        </Toolbar>
      </AppBar>
  </>);
};

export default Navbar;