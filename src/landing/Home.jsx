import Typography from '@mui/material/Typography';
import Sequence from './../component/Sequence';
import Button from '@mui/material/Button'
import "../scss/landing.scss";
/** @jsxImportSource @emotion/react */
import {css} from "@emotion/react";
import Footer from "./../component/Footer";
import {Link} from "react-router-dom";

const Home = () => {
  const mainText = css`
    font-size: 27px;
    @media(min-width: 500px) {
      font-size: 33px;
    }
  `;
  
  return (<>
    <div className="arrange">
      <Typography variant="h4" align="center" css={mainText} sx={{textTransform: "uppercase"}}>layanan aspirasi online <br className="break"/>universitas sebelas april sumedang</Typography>
      <Sequence/>
      <Link to="/about" style={{paddingBottom: 0}}>
        <Button variant="contained">lihat selengkapnya</Button>
      </Link>
    </div>
    <Footer/>
  </>);
};

export default Home;