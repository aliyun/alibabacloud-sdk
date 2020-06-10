// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutExporterOutputRequest : TeaModel {
        [NameInMap("DestName")]
        [Validation(Required=true)]
        public string DestName { get; set; }

        [NameInMap("ConfigJson")]
        [Validation(Required=true)]
        public string ConfigJson { get; set; }

        [NameInMap("Desc")]
        [Validation(Required=false)]
        public string Desc { get; set; }

        [NameInMap("DestType")]
        [Validation(Required=false)]
        public string DestType { get; set; }

    }

}
