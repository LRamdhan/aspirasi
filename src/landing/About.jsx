import "../scss/landing.scss";
import Typography from '@mui/material/Typography'
import Paper from '@mui/material/Paper'
import Container from '@mui/material/Container'
import Footer from "../component/Footer";

const About = () => {
  return (<>
    <Container maxWidth="lg">
      <div className="arrange">
        <Typography variant="h4" sx={{textTransform: "uppercase"}}>apa itu layanan aspirasi online</Typography>
        <Paper sx={{paddingBottom: 0, padding: 4}}>
          <Typography variant="body1">Banyak Mahasiswa merasa kebingungan ketika ingin menyampaikan aspirasi, kritik dan sarannya. Oleh karena itu website Layanan Aspirasi Online dibuat sebagai wadah bagi Mahasiswa Universitas Sebelas April Sumedang untuk menuangkan aspirasi, kritik, dan sarannya. Sehingga aspirasi akan lebih mudah diterima dengan efektif</Typography>
        </Paper>
      </div>
    </Container>
    <Footer/>
  </>);
};

export default About;