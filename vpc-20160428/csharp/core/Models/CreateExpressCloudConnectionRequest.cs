// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateExpressCloudConnectionRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=false)]
        public string Name { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("PeerCity")]
        [Validation(Required=false)]
        public string PeerCity { get; set; }

        [NameInMap("PeerLocation")]
        [Validation(Required=true)]
        public string PeerLocation { get; set; }

        [NameInMap("IdcSP")]
        [Validation(Required=true)]
        public string IdcSP { get; set; }

        [NameInMap("PortType")]
        [Validation(Required=false)]
        public string PortType { get; set; }

        [NameInMap("Bandwidth")]
        [Validation(Required=true)]
        public int? Bandwidth { get; set; }

        [NameInMap("ContactTel")]
        [Validation(Required=false)]
        public string ContactTel { get; set; }

        [NameInMap("ContactMail")]
        [Validation(Required=false)]
        public string ContactMail { get; set; }

        [NameInMap("IDCardNo")]
        [Validation(Required=false)]
        public string IDCardNo { get; set; }

        [NameInMap("RedundantEccId")]
        [Validation(Required=false)]
        public string RedundantEccId { get; set; }

    }

}
