// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vcs20200515.Models
{
    public class AddDeviceRequest : TeaModel {
        [NameInMap("GbId")]
        [Validation(Required=false)]
        public string GbId { get; set; }

        [NameInMap("DeviceName")]
        [Validation(Required=false)]
        public string DeviceName { get; set; }

        [NameInMap("DeviceType")]
        [Validation(Required=false)]
        public string DeviceType { get; set; }

        [NameInMap("DeviceAddress")]
        [Validation(Required=false)]
        public string DeviceAddress { get; set; }

        [NameInMap("DeviceSite")]
        [Validation(Required=false)]
        public string DeviceSite { get; set; }

        [NameInMap("DeviceDirection")]
        [Validation(Required=false)]
        public string DeviceDirection { get; set; }

        [NameInMap("DeviceResolution")]
        [Validation(Required=false)]
        public string DeviceResolution { get; set; }

        [NameInMap("BitRate")]
        [Validation(Required=false)]
        public string BitRate { get; set; }

        [NameInMap("CorpId")]
        [Validation(Required=false)]
        public string CorpId { get; set; }

        [NameInMap("Vendor")]
        [Validation(Required=false)]
        public string Vendor { get; set; }

    }

}
