import Grid from '@mui/material/Grid';
import List from '@mui/material/List';
import ListItem from '@mui/material/ListItem';
import Typography from '@mui/material/Typography'
import Toolbar from '@mui/material/Toolbar'
import HomeOutlinedIcon from '@mui/icons-material/HomeOutlined';
import LocationOnOutlinedIcon from '@mui/icons-material/LocationOnOutlined';
import EmailOutlinedIcon from '@mui/icons-material/EmailOutlined';
import LocalPhoneOutlinedIcon from '@mui/icons-material/LocalPhoneOutlined';
import unsap from "../img/unsap.png";
import tahungoding from "../img/tahungoding.png";

const Footer = () => {
  return (<>
    <footer style={{backgroundColor: "#1976d2", color: "white", paddingBottom: 20, paddingTop: 30}}>
      <Grid container rowSpacing={4}>
        <Grid item xs={12} sm={6} sx={{paddingTop: 0}}>
          <Toolbar sx={{justifyContent: "center"}}>
            <div>
              <Typography variant="h5" sx={{textTransform: "uppercase"}}>kontak kami</Typography>
              <List>
                <ListItem>
                  <HomeOutlinedIcon fontSize="large" sx={{marginRight: 2}}/>
                  <Typography variant="button">unsap sumedang</Typography>
                </ListItem>
                <ListItem>
                  <LocationOnOutlinedIcon fontSize="large" sx={{marginRight: 2}}/>
                  <Typography variant="button">jl. anggrek situ no 19 sumedang</Typography>
                </ListItem>
                <ListItem>
                  <EmailOutlinedIcon fontSize="large" sx={{marginRight: 2}}/>
                  <Typography variant="button">info@unsap.ac.id</Typography>
                </ListItem>
                <ListItem>
                  <LocalPhoneOutlinedIcon fontSize="large" sx={{marginRight: 2}}/>
                  <Typography variant="button">(0261) 202911</Typography>
                </ListItem>
              </List>
            </div>
          </Toolbar>
        </Grid>
        <Grid item xs={12} sm={6}>
          <Toolbar sx={{justifyContent: "center"}}>
            <div>
              <Typography variant="h5" sx={{textTransform: "uppercase", marginBottom: 2}}>dikelola oleh</Typography>
              <Toolbar>
                <img src={unsap} alt="unsap" style={{marginRight: 20}}/>
                <img src={tahungoding} alt="tahungoding" />
              </Toolbar>
            </div>
          </Toolbar>
        </Grid>
      </Grid>
    </footer>
  </>);
};

export default Footer;