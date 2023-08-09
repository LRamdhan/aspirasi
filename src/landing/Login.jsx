import { useState } from "react";
import { usePosition, useRequest } from "../hook/customhook";
import "../scss/landing.scss";
import FormControl from '@mui/material/FormControl'
import FormLabel from '@mui/material/FormLabel'
import Paper from '@mui/material/Paper'
import TextField from "@mui/material/TextField";
import Button from "@mui/material/Button";
import InputAdornment from "@mui/material/InputAdornment";
import VpnKeyRoundedIcon from '@mui/icons-material/VpnKeyRounded';
import LockRoundedIcon from '@mui/icons-material/LockRounded';
import Typography from '@mui/material/Typography'
import Footer from "./../component/Footer"

const Login = () => {
  const position = usePosition();
  const request = useRequest();
  const [npm, setNpm] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");

  const submit = event => {
    event.preventDefault();
    request.post('/landing/login.php', {
      npm: npm,
      password: password
    })
      .then(response => {
        if(response.data.status === 1) {
          window.open(`${import.meta.env.VITE_rootURL}/page/aspirasi.php`, "_self");
        } else {
          setError("username atau password salah");
        }
      });
  };

  return (<>
    <div className="box">
      <div style={{width: "100%", margin: 10}}>
        <Paper sx={{paddingBottom: 0, padding: "50px 30px", maxWidth: "350px", margin: "auto"}}>
          <FormControl component="form" sx={{width: "100%"}} onSubmit={submit}>
            <Typography variant="h4" align="center" sx={{marginBottom: 5}}>LOGIN</Typography>
            {error && <FormLabel align="center" error sx={{marginBottom: 2}}>{error}</FormLabel>}
            <TextField label="NPM" type="number" required name="npm" fullWidth sx={{marginBottom: 3}}
              InputProps={{
                endAdornment: <InputAdornment position="end"><VpnKeyRoundedIcon/></InputAdornment>
              }} 
              value={npm} onInput={event => setNpm(event.target.value)}
            />
            <TextField label="Password" type="password" required name="password" fullWidth sx={{marginBottom: 5}}
              InputProps={{
                endAdornment: <InputAdornment position="end"><LockRoundedIcon/></InputAdornment>
              }} 
              value={password} onInput={event => setPassword(event.target.value)}
            />
            <Button type="submit" fullWidth variant="contained">login</Button>
          </FormControl>
        </Paper>
      </div>
    </div>
    <Footer/>
  </>);
};

export default Login;