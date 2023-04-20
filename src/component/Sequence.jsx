import Stepper from '@mui/material/Stepper'
import Step from '@mui/material/Step'
import StepLabel from '@mui/material/StepLabel'
import Typography from '@mui/material/Typography'
import EditNoteRoundedIcon from '@mui/icons-material/EditNoteRounded';
import VerifiedUserRoundedIcon from '@mui/icons-material/VerifiedUserRounded';
import WifiProtectedSetupRoundedIcon from '@mui/icons-material/WifiProtectedSetupRounded';
import DoneRoundedIcon from '@mui/icons-material/DoneRounded';

const Write = () => <EditNoteRoundedIcon fontSize="large"/>
const Verification = () => <VerifiedUserRoundedIcon fontSize="large"/>
const Process = () => <WifiProtectedSetupRoundedIcon fontSize="large"/>
const End = () => <DoneRoundedIcon fontSize="large"/>

const Sequence = () => {
  return (<>
    <Stepper activeStep={5} alternativeLabel sx={{width: "100%"}}>
      <Step>
        <StepLabel StepIconComponent={Write}>
          <Typography className="break" variant="h5" sx={{textTransform: "capitalize"}}>tulis laporan</Typography>
          <Typography className="break" variant="subtitle2">Laporkan aspirasi anda dengan jelas dan lengkap.</Typography>
        </StepLabel>
      </Step>
      <Step>
        <StepLabel StepIconComponent={Verification}>
          <Typography variant="h5" className="break" sx={{textTransform: "capitalize"}}>verifikasi</Typography>
          <Typography variant="subtitle2" className="break">Dalam tiga hari laporan akan diverifikasi dan diteruskan ke lembaga</Typography>
        </StepLabel>
      </Step>
      <Step>
        <StepLabel StepIconComponent={Process}>
          <Typography variant="h5" className="break" sx={{textTransform: "capitalize"}}>proses tindak lanjut</Typography>
          <Typography variant="subtitle2" className="break">Dalam tujuh hari, lembaga akan menindaklanjuti laporan anda.</Typography>
        </StepLabel>
      </Step>
      <Step>
        <StepLabel StepIconComponent={End}>
          <Typography variant="h5" className="break" sx={{textTransform: "capitalize"}}>selesai</Typography>
          <Typography variant="subtitle2" className="break">Laporan anda akan ditindaklanjuti sampai selesai.</Typography>
        </StepLabel>
      </Step>
    </Stepper>
  </>);
};

export default Sequence;