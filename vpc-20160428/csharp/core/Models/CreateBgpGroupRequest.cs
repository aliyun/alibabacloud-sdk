// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateBgpGroupRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("RouterId")]
        [Validation(Required=true)]
        public string RouterId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=false)]
        public string Name { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("LocalAsn")]
        [Validation(Required=false)]
        public long LocalAsn { get; set; }

        [NameInMap("PeerAsn")]
        [Validation(Required=true)]
        public long PeerAsn { get; set; }

        [NameInMap("AuthKey")]
        [Validation(Required=false)]
        public string AuthKey { get; set; }

        [NameInMap("IsFakeAsn")]
        [Validation(Required=false)]
        public bool? IsFakeAsn { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("IpVersion")]
        [Validation(Required=false)]
        public string IpVersion { get; set; }

    }

}
