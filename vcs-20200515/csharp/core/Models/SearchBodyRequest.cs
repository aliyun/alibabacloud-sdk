// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vcs20200515.Models
{
    public class SearchBodyRequest : TeaModel {
        [NameInMap("CorpId")]
        [Validation(Required=true)]
        public string CorpId { get; set; }

        [NameInMap("GbId")]
        [Validation(Required=false)]
        public string GbId { get; set; }

        [NameInMap("StartTimeStamp")]
        [Validation(Required=true)]
        public long StartTimeStamp { get; set; }

        [NameInMap("EndTimeStamp")]
        [Validation(Required=true)]
        public long EndTimeStamp { get; set; }

        [NameInMap("PageNo")]
        [Validation(Required=true)]
        public int? PageNo { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("OptionList")]
        [Validation(Required=false)]
        public Dictionary<string, string> OptionList { get; set; }

    }

}
