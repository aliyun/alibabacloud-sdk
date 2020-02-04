// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeTrainTicketResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeTrainTicketResponseData Data { get; set; }
        public class RecognizeTrainTicketResponseData : TeaModel {
            [NameInMap("Date")]
            [Validation(Required=true)]
            public string Date { get; set; }
            [NameInMap("Destination")]
            [Validation(Required=true)]
            public string Destination { get; set; }
            [NameInMap("Level")]
            [Validation(Required=true)]
            public string Level { get; set; }
            [NameInMap("Number")]
            [Validation(Required=true)]
            public string Number { get; set; }
            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }
            [NameInMap("DepartureStation")]
            [Validation(Required=true)]
            public string DepartureStation { get; set; }
            [NameInMap("Seat")]
            [Validation(Required=true)]
            public string Seat { get; set; }
            [NameInMap("Price")]
            [Validation(Required=true)]
            public float Price { get; set; }
        };

    }

}
