// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class UpdateGtmAddressPoolRequest : TeaModel {
        [NameInMap("Lang")]
        [Validation(Required=false)]
        public string Lang { get; set; }

        [NameInMap("AddrPoolId")]
        [Validation(Required=true)]
        public string AddrPoolId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=false)]
        public string Name { get; set; }

        [NameInMap("Type")]
        [Validation(Required=true)]
        public string Type { get; set; }

        [NameInMap("MinAvailableAddrNum")]
        [Validation(Required=false)]
        public int? MinAvailableAddrNum { get; set; }

        [NameInMap("Addr")]
        [Validation(Required=true)]
        public List<UpdateGtmAddressPoolRequestAddr> Addr { get; set; }
        public class UpdateGtmAddressPoolRequestAddr : TeaModel {
            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

            [NameInMap("LbaWeight")]
            [Validation(Required=true)]
            public int? LbaWeight { get; set; }

            [NameInMap("Mode")]
            [Validation(Required=true)]
            public string Mode { get; set; }

        }

    }

}
