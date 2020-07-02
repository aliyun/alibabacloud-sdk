// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageprocess20200320.Models
{
    public class DetectCovid19CadRequest : TeaModel {
        [NameInMap("URLList")]
        [Validation(Required=true)]
        public List<DetectCovid19CadRequestURLList> URLList { get; set; }
        public class DetectCovid19CadRequestURLList : TeaModel {
            [NameInMap("URL")]
            [Validation(Required=true)]
            public string URL { get; set; }

        }

    }

}
