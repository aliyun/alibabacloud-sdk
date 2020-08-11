// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateSnatEntryRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("SnatTableId")]
        [Validation(Required=true)]
        public string SnatTableId { get; set; }

        [NameInMap("SourceVSwitchId")]
        [Validation(Required=false)]
        public string SourceVSwitchId { get; set; }

        [NameInMap("SourceCIDR")]
        [Validation(Required=false)]
        public string SourceCIDR { get; set; }

        [NameInMap("SnatIp")]
        [Validation(Required=true)]
        public string SnatIp { get; set; }

        [NameInMap("SnatEntryName")]
        [Validation(Required=false)]
        public string SnatEntryName { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
